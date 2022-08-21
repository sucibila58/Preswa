<?php
namespace App\Controllers;
use App\Models\M_Admin; 
use App\Models\M_Siswa;
use App\Models\M_Guru;
use App\Models\M_Kelas; 
use App\Models\M_Ekskul;
use App\Models\M_Prestasi;
use App\Models\M_Tingkat;
use App\Models\M_Bidang;
use App\Models\M_Gelar;
use App\Models\M_Provinsi;
use App\Models\M_Kota;


class Admin extends BaseController
{
    public function antiinjection($data)
    {
        $filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
        return $filter_sql;
    }

    public function index()
    {
        return view('Admin/Login/login');
    }

    public function autentikasi_login()
    {
        $modelAdmin = new M_Admin;

        $username = $this->antiinjection($this->request->getpost('username'));
        $password = $this->antiinjection(sha1($this->request->getpost('password')));
        
        $cekUsername = $modelAdmin->getDataAdmin(['username_admin' => $username])->getNumRows();
        $cekPassword = $modelAdmin->getDataAdmin(['username_admin' => $username, 'password_admin' => $password])->getNumRows();
        if($cekUsername == 0){
            session()->setFlashdata('error','Maaf, Username Tidak Ditemukan!!');
            ?>
            <script>
                document.location = "<?= base_url('admin/login');?>";
            </script>
            <?php
        }
        elseif($cekPassword == 0){
            session()->setFlashdata('error','Kombinasi Username dan Password Salah!!')
            ?>
            <script>
                document.location = "<?= base_url('admin/login');?>";
            </script>
            <?php
        }
        else {
            $dataUser = $modelAdmin->getDataAdmin(['username_admin' => $username, 'password_admin' => $password])->getRowArray();
            $dataSession = [
                'ses_id' => $dataUser['id_admin'],
                'ses_level' => $dataUser['akses_level'],
                'ses_namauser' => $dataUser['nama_admin']
            ];
            session()->set($dataSession);
            ?>
            <script>
                document.location = "<?= base_url('admin/dashboard-admin');?>";
            </script>
            <?php
        }
    }

    public function dashboard()
    {
        $modelSiswa = new M_Siswa;
        $modelPrestasi = new M_Prestasi;
        $modelKelas = new M_Kelas;
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Dashboard Admin";

        $jumSiswa = $modelSiswa -> getDataSiswa() -> getNumRows();
        $jumPrestasi = $modelPrestasi -> getDataPrestasi() -> getNumRows();
        $jumKelas = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.level_kelas' => 'X',])->getResultArray();
        
        $jumKelas = $modelKelas -> getDataKelas() -> getNumRows();
        $data ['jumSiswa'] = $jumSiswa;
        $data ['jumPrestasi'] = $jumPrestasi;
        $data ['jumKelas'] = $jumKelas;

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Login/dashboard', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function master_admin()
    {
        $modelAdmin = new M_Admin;
        // Mengambil data keseluruhan admin dari table admin di database
        $dataAdmin = $modelAdmin->getDataAdmin()->getResultArray();

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Master Data Admin";
        $data['dataAdmin'] = $dataAdmin; // mengirim array data admin ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Admin/master-data-admin', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function edit_admin()
    {
        $uri = service('uri');
        $idEdit = $uri->getSegment(3);

        $modelAdmin = new M_Admin;
        // Mengambil data keseluruhan admin dari table admin di database
        $dataAdmin = $modelAdmin->getDataAdmin(['sha1(id_admin)' => $idEdit])->getRowArray();
        session()->set(['idUpdate' => $dataAdmin['id_admin']]);

        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Edit Data Admin";
        $data['data_admin'] = $dataAdmin; // mengirim array data admin ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Admin/edit-admin', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function update_admin()
    {
        $modelAdmin = new M_Admin;

        $idUpdate = session()->get('idUpdate');
        $nama = $this->request->getPost('nama');
        $level = $this->request->getPost('level');

        $dataUpdate = [
            'nama_admin' => $nama,
            'akses_level' => $level
        ];
        $whereUpdate = ['id_admin' => $idUpdate];

        $modelAdmin->updateDataAdmin($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Admin Berhasil Diperbaharui!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-admin');?>";
        </script>
        <?php
    }

    public function hapus_admin()
    {
        $modelAdmin = new M_Admin;

        $uri = service('uri');
        $idHapus = $uri->getSegment(3);

        $modelAdmin->hapusDataAdmin(['sha1(id_admin)' => $idHapus]);
        session()->setFlashdata('success','Data Admin Berhasil Dihapus!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-admin');?>";
        </script>
        <?php
    }

    public function input_admin()
    {
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Input Data Admin";

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Admin/input-admin', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function simpan_admin()
    {
        $modelAdmin = new M_Admin;

        $nama = $this->request->getPost('nama');
        $level = $this->request->getPost('level');
        $username = $this->request->getPost('username');

        $hasil = $modelAdmin->autoNumber()->getRowArray();
        if(!$hasil){
            $id = "ADM001";
        }
        else{
            $kode = $hasil['id_admin'];

            $noUrut = (int) substr($kode,-3);
            $noUrut++;
            $id = "ADM".sprintf("%03s", $noUrut);
        }

        $dataSimpan = [
            'id_admin' => $id,
            'nama_admin' => ucwords($nama),
            'username_admin' => strtolower($username),
            'password_admin' => sha1("adminpw"),
            'akses_level' => $level
        ];

        $modelAdmin->saveDataAdmin($dataSimpan);
        session()->setFlashdata('success','Data Admin Berhasil Ditambahkan!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-admin');?>";
        </script>
        <?php
    }

    // Awal modul untuk Siswa
    public function master_siswa()
    {
        $modelSiswa = new M_Siswa;
        // Mengambil data keseluruhan siswa dari table siswa di database
        $dataSiswa = $modelSiswa->getDataSiswaJoin()->getResultArray();

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Master Data Siswa";
        $data['dataSiswa'] = $dataSiswa; // mengirim array data siswa ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Siswa/master-data-siswa', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function edit_siswa()
    {
        $modelKelas = new M_Kelas;
        $uri = service('uri');
        $idEdit = $uri->getSegment(3);

        $modelSiswa = new M_Siswa;
        // Mengambil data keseluruhan siswa dari table siswa di database
        $dataSiswa = $modelSiswa->getDataSiswa(['sha1(nis_siswa)' => $idEdit])->getRowArray();
        session()->set(['idUpdate' => $dataSiswa['nis_siswa']]);

        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Edit Data Siswa";
        $data['data_siswa'] = $dataSiswa; // mengirim array data siswa ke view
        $data['data_kelas'] = $modelKelas->getDataKelas()->getResultArray();

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Siswa/edit-siswa', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function update_siswa()
    {
        $modelSiswa = new M_Siswa;

        $idUpdate = session()->get('idUpdate');
        $nis = $this->request->getPost('nis');
        $nama = $this->request->getPost('nama');
        $kelas = $this->request->getPost('kelas');
        $jk = $this->request->getPost('jk');
        $alamat = $this->request->getPost('alamat');
        $tahun = $this->request->getPost('tahun');
        $kontak = $this->request->getPost('kontak');

        $dataUpdate = [
            'nama_siswa' => $nama,
            'id_kelas' => $kelas,
            'jenis_kelamin' => $jk,
            'alamat_siswa' => $alamat,
            'tahun_angkatan' => $tahun,
            'kontak_siswa' => $kontak
        ];
        $whereUpdate = ['nis_siswa' => $idUpdate];

        $modelSiswa->updateDataSiswa($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Siswa Berhasil Diperbaharui!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-siswa');?>";
        </script>
        <?php
    }

    public function hapus_siswa()
    {
        $modelSiswa = new M_Siswa;

        $uri = service('uri');
        $idHapus = $uri->getSegment(3);

        $modelSiswa->hapusDataSiswa(['sha1(nis_siswa)' => $idHapus]);
        session()->setFlashdata('success','Data Siswa Berhasil Dihapus!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-siswa');?>";
        </script>
        <?php
    }

    public function input_siswa()
    {
        $modelKelas = new M_Kelas;
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Input Data Siswa";
        $data['data_kelas'] = $modelKelas->getDataKelas()->getResultArray();

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Siswa/input-siswa', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function simpan_siswa()
    {
        $modelSiswa = new M_Siswa;

        $nis = $this->request->getPost('nis');
        $nama = $this->request->getPost('nama');
        $kelas = $this->request->getPost('kelas');
        $jk = $this->request->getPost('jk');
        $alamat = $this->request->getPost('alamat');
        $tahun = $this->request->getPost('tahun');
        $kontak = $this->request->getPost('kontak');

        $dataSimpan = [
            'nis_siswa' => $nis,
            'nama_siswa' => ucwords($nama),
            'id_kelas' => $kelas,
            'jenis_kelamin' => $jk,
            'alamat_siswa' => $alamat,
            'tahun_angkatan' => $tahun,
            'kontak_siswa' => $kontak,
            'passw_siswa' => sha1("siswa_pass")
        ];

        $modelSiswa->saveDataSiswa($dataSimpan);
        session()->setFlashdata('success','Data Siswa Berhasil Ditambahkan!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-siswa');?>";
        </script>
        <?php
    }

    // Awal modul untuk Guru
    public function master_guru()
    {
        $modelGuru = new M_Guru;
        // Mengambil data keseluruhan guru dari table guru di database
        $dataGuru = $modelGuru->getDataGuru()->getResultArray();

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Master Data Guru";
        $data['dataGuru'] = $dataGuru; // mengirim array data guru ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Guru/master-data-guru', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function edit_guru()
    {
        $uri = service('uri');
        $idEdit = $uri->getSegment(3);

        $modelGuru = new M_Guru;
        // Mengambil data keseluruhan guru dari table guru di database
        $dataGuru = $modelGuru->getDataGuru(['sha1(id_guru)' => $idEdit])->getRowArray();
        session()->set(['idUpdate' => $dataGuru['id_guru']]);

        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Edit Data Guru";
        $data['data_guru'] = $dataGuru; // mengirim array data guru ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Guru/edit-guru', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function update_guru()
    {
        $modelGuru = new M_Guru;

        $idUpdate = session()->get('idUpdate');
        $nip = $this->request->getPost('nip');
        $nama = $this->request->getPost('nama');
        $kontak = $this->request->getPost('kontak');
        $status = $this->request->getPost('status');

        $dataUpdate = [
            'nip_guru' => $nip,
            'nama_guru' => $nama,
            'kontak_guru' => $kontak,
            'status_jabatan' => $status
        ];
        $whereUpdate = ['id_guru' => $idUpdate];

        $modelGuru->updateDataGuru($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Guru Berhasil Diperbaharui!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-guru');?>";
        </script>
        <?php
    }

    public function hapus_guru()
    {
        $modelGuru = new M_Guru;

        $uri = service('uri');
        $idHapus = $uri->getSegment(3);

        $modelGuru->hapusDataGuru(['sha1(id_guru)' => $idHapus]);
        session()->setFlashdata('success','Data Guru Berhasil Dihapus!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-guru');?>";
        </script>
        <?php
    }

    public function input_guru()
    {
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Input Data Guru";

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Guru/input-guru', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function simpan_guru()
    {
        $modelGuru = new M_Guru;

        $nip = $this->request->getPost('nip');
        $nama = $this->request->getPost('nama');
        $kontak = $this->request->getPost('kontak');
        $status = $this->request->getPost('status');

        $hasil = $modelGuru->autoNumber()->getRowArray();
        if(!$hasil){
            $id = "G001";
        }
        else{
            $kode = $hasil['id_guru'];

            $noUrut = (int) substr($kode,-3);
            $noUrut++;
            $id = "G".sprintf("%03s", $noUrut);
        } 

        $dataSimpan = [
            'id_guru' => $id,
            'nip_guru' => $nip,
            'nama_guru' => ucwords($nama),
            'kontak_guru' => $kontak,
            'status_jabatan' => $status
        ];

        $modelGuru->saveDataGuru($dataSimpan);
        session()->setFlashdata('success','Data Guru Berhasil Ditambahkan!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-guru');?>";
        </script>
        <?php
    }

    // Awal modul untuk Kelas
    public function master_kelas()
    {
        $modelKelas = new M_Kelas;
        // Mengambil data keseluruhan kelas dari table kelas di database
        $dataKelas = $modelKelas->getDataKelasJoin()->getResultArray();

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Master Data Kelas";
        $data['dataKelas'] = $dataKelas; // mengirim array data kelas ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Kelas/master-data-kelas', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function edit_kelas()
    {
        $modelGuru = new M_Guru;
        $uri = service('uri');
        $idEdit = $uri->getSegment(3);

        $modelKelas = new M_Kelas;
        // Mengambil data keseluruhan kelas dari table kelas di database
        $dataKelas = $modelKelas->getDataKelas(['sha1(id_kelas)' => $idEdit])->getRowArray();
        session()->set(['idUpdate' => $dataKelas['id_kelas']]);

        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Edit Data Kelas";
        $data['data_kelas'] = $dataKelas; // mengirim array data kelas ke view
        $data['data_guru'] = $modelGuru->getDataGuru()->getResultArray();

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Kelas/edit-kelas', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function update_kelas()
    {
        $modelKelas = new M_Kelas;

        $idUpdate = session()->get('idUpdate');
        $levelKelas = session()->get('levelKelas');
        $nama = $this->request->getPost('nama');
        $wali = $this->request->getPost('wali');
        $kapasitas = $this->request->getPost('kapasitas');

        $dataUpdate = [
            'nama_kelas' => $nama,
            'id_guru' => $wali,
            'kapasitas' => $kapasitas
        ];
        $whereUpdate = ['id_kelas' => $idUpdate];

        $modelKelas->updateDataKelas($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Kelas Berhasil Diperbaharui!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-kelas');?>";
        </script>
        <?php
    }

    public function hapus_kelas()
    {
        $modelKelas = new M_Kelas;

        $uri = service('uri');
        $idHapus = $uri->getSegment(3);

        $modelKelas->hapusDataKelas(['sha1(id_kelas)' => $idHapus]);
        session()->setFlashdata('success','Data Kelas Berhasil Dihapus!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-kelas');?>";
        </script>
        <?php
    }

    public function input_kelas()
    {
        $modelGuru = new M_Guru;
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Input Data Kelas";
        
        $data['data_guru'] = $modelGuru->getDataGuru()->getResultArray();

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Kelas/input-kelas', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function simpan_kelas()
    {
        $modelKelas = new M_Kelas;

        $levelKelas = $this->request->getPost('levelKelas');
        $nama = $this->request->getPost('nama');
        $wali = $this->request->getPost('wali');
        $kapasitas = $this->request->getPost('kapasitas');

        $hasil = $modelKelas->autoNumber()->getRowArray();
        if(!$hasil){
            $id = "K001";
        }
        else{
            $kode = $hasil['id_kelas'];

            $noUrut = (int) substr($kode,-3);
            $noUrut++;
            $id = "K".sprintf("%03s", $noUrut);
        }

        $dataSimpan = [
            'id_kelas' => $id,
            'level_kelas' => $levelKelas,
            'nama_kelas' => $nama,
            'id_guru' => $wali,
            'kapasitas' => $kapasitas
        ];

        $modelKelas->saveDataKelas($dataSimpan);
        session()->setFlashdata('success','Data Kelas Berhasil Ditambahkan!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-kelas');?>";
        </script>
        <?php
    }

    // Awal modul untuk Ekskul
    public function master_ekskul()
    {
        $modelEkskul = new M_Ekskul;
        // Mengambil data keseluruhan ekskul dari table ekskul di database
        $dataEkskul = $modelEkskul->getDataEkskulJoin()->getResultArray();

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Master Data Ekskul";
        $data['dataEkskul'] = $dataEkskul; // mengirim array data ekskul ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Ekskul/master-data-ekskul', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function edit_ekskul()
    {
        $modelGuru = new M_Guru;
        $uri = service('uri');
        $idEdit = $uri->getSegment(3);

        $modelEkskul = new M_Ekskul;
        // Mengambil data keseluruhan ekskul dari table ekskul di database
        $dataEkskul = $modelEkskul->getDataEkskul(['sha1(id_ekskul)' => $idEdit])->getRowArray();
        session()->set(['idUpdate' => $dataEkskul['id_ekskul']]);

        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Edit Data Ekskul";
        $data['data_ekskul'] = $dataEkskul; // mengirim array data ekskul ke view
        $data['data_guru'] = $modelGuru->getDataGuru()->getResultArray();

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Ekskul/edit-ekskul', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function update_ekskul()
    {
        $modelEkskul = new M_Ekskul;

        $idUpdate = session()->get('idUpdate');
        $nama = $this->request->getPost('nama');
        $jumlah = $this->request->getPost('jumlah');
        $pembina = $this->request->getPost('pembina');
        $pelatih = $this->request->getPost('pelatih');

        $dataUpdate = [
            'nama_ekskul' => $nama,
            'jumlah_siswa' => $jumlah,
            'id_guru' => $pembina,
            'pelatih' => $pelatih
        ];
        $whereUpdate = ['id_ekskul' => $idUpdate];

        $modelEkskul->updateDataEkskul($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Ekskul Berhasil Diperbaharui!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-ekskul');?>";
        </script>
        <?php
    }

    public function hapus_ekskul()
    {
        $modelEkskul = new M_Ekskul;

        $uri = service('uri');
        $idHapus = $uri->getSegment(3);

        $modelEkskul->hapusDataEkskul(['sha1(id_ekskul)' => $idHapus]);
        session()->setFlashdata('success','Data Ekskul Berhasil Dihapus!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-ekskul');?>";
        </script>
        <?php
    }

    public function input_ekskul()
    {
        $modelGuru = new M_Guru;
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Input Data Ekskul";
        $data['data_guru'] = $modelGuru->getDataGuru()->getResultArray();

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Ekskul/input-ekskul', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function simpan_ekskul()
    {
        $modelEkskul = new M_Ekskul;

        $nama = $this->request->getPost('nama');
        $jumlah = $this->request->getPost('jumlah');
        $pembina = $this->request->getPost('pembina');
        $pelatih = $this->request->getPost('pelatih');

        $hasil = $modelEkskul->autoNumber()->getRowArray();
        if(!$hasil){
            $id = "E001";
        }
        else{
            $kode = $hasil['id_ekskul'];

            $noUrut = (int) substr($kode,-3);
            $noUrut++;
            $id = "E".sprintf("%03s", $noUrut);
        }

        $dataSimpan = [
            'id_ekskul' => $id,
            'nama_ekskul' => $nama,
            'jumlah_siswa' => $jumlah,
            'id_guru' => $pembina,
            'pelatih' => $pelatih
        ];

        $modelEkskul->saveDataEkskul($dataSimpan);
        session()->setFlashdata('success','Data Ekskul Berhasil Ditambahkan!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-ekskul');?>";
        </script>
        <?php
    }

    // Awal modul untuk Persetujuan Prestasi
    public function master_acc_prestasi()
    {
        $modelPrestasi = new M_Prestasi;
        // Mengambil data keseluruhan prestasi dari table prestasi di database
        if(session()->get('ses_level') == "2"){
            $dataPrestasi = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.persetujuan_wakasek' => '0', 'tbl_prestasi.persetujuan_walikelas' => '1'])->getResultArray();
        }
        elseif(session()->get('ses_level') == "3"){
            $dataPrestasi = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.persetujuan_walikelas' => '0'])->getResultArray();
        }     
        else{
            $dataPrestasi = $modelPrestasi->getDataPrestasiJoin()->getResultArray();
        }   

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Persetujuan Prestasi";
        $data['dataPrestasi'] = $dataPrestasi; // mengirim array data prestasi ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Prestasi/master-acc-prestasi', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function master_prestasi()
    {
        $modelPrestasi = new M_Prestasi;
        // Mengambil data keseluruhan prestasi dari table prestasi di database

        $dataPrestasi = $modelPrestasi->getDataPrestasiJoin()->getResultArray(); 

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Laporan Prestasi";
        $data['dataPrestasi'] = $dataPrestasi; // mengirim array data prestasi ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Prestasi/master-prestasi', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function cetak_laporan()
    {
        $modelPrestasi =new M_Prestasi;
       
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Cetak Laporan Prestasi";

        if(session()->get('ses_level') == "1" or session()->get('ses_level') == "2"){
            $data['dataPrestasi'] = $modelPrestasi->getDataPrestasi()->getResultArray();
            $data['dataPrestasi'] = $modelPrestasi -> getJenisPrestasi() -> getResultArray();
            /*$data['dataKelas'] = $modelPrestasi -> getKelas() -> getResultArray();*/
        }
        else{
            $data['dataPrestasi'] = $modelPrestasi->getDataPrestasi(['id_prestasi' => session()->get('ses_prestasi')])->getResultArray();
        }

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Prestasi/cetak-laporan', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function cetak_laporan_prestasi()
    {
        $uri = service('uri');
        $page = $uri->getSegment(2);
        $modelPrestasi = new M_Prestasi;
        // Mengambil data keseluruhan prestasi dari table prestasi di database
        if(session()->get('ses_level') == "2"){
            $dataPrestasi = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.persetujuan_wakasek' => '0', 'tbl_prestasi.persetujuan_walikelas' => '1'])->getResultArray();
        }
        elseif(session()->get('ses_level') == "3"){
            $dataPrestasi = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.persetujuan_walikelas' => '0'])->getResultArray();
        }     
        else{
            $dataPrestasi = $modelPrestasi->getDataPrestasiJoin()->getResultArray();
        }   

        $jenisPrestasi = $this->request->getPost('jenis_prestasi');
        /*$kelas = $this->request->getPost('id_kelas');*/
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');

        $cekAda = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.jenis_prestasi'=> $jenisPrestasi,'tbl_prestasi.waktu_pelaksanaan >=' => $tgl_awal, 'tbl_prestasi.waktu_pelaksanaan <=' => $tgl_akhir,
        'tbl_prestasi.persetujuan_wakasek' => '1'])->getNumRows();
        if($cekAda==0){
            session()->setFlashdata('error','Tidak Ada Data Untuk Ditampilkan!')
            ?>
            <script>
                document.location = "<?= base_url('admin/cetak-laporan');?>";
            </script>
            <?php
        }
        else{
        $data['page'] = $page;
        $data['web_title'] = " Cetak Laporan Prestasi";
        $data['dataPrestasi'] = $modelPrestasi -> getDataPrestasi(['jenis_prestasi' => $jenisPrestasi])->getRowArray();
        $data['dataPrestasi'] = $modelPrestasi-> getDataPrestasiJoin(['jenis_prestasi' => $jenisPrestasi,'tbl_prestasi.waktu_pelaksanaan >=' => $tgl_awal, 
        'tbl_prestasi.waktu_pelaksanaan <=' => $tgl_akhir,'tbl_prestasi.persetujuan_wakasek' => '1'])->getResultArray(); // mengirim array data prestasi ke view
        echo view('Admin/Prestasi/cetak-laporan-prestasi', $data);
        }
    }

    public function detail_prestasi()
    {
        $uri = service('uri');
        $page = $uri->getSegment(2);
        $idPres = $uri->getSegment(3);

        $modelPrestasi = new M_Prestasi;
        // Mengambil data keseluruhan prestasi dari table prestasi di database
        $dataPrestasi = $modelPrestasi->getDataPrestasiJoin(['sha1(tbl_prestasi.id_prestasi)' => $idPres])->getRowArray();
        session()->set(['idUpdate' => $dataPrestasi['id_prestasi']]);

        $data['page'] = $page;
        $data['web_title'] = "Detail Prestasi";
        $data['dataPrestasi'] = $dataPrestasi; // mengirim array data prestasi ke view

        echo view('Admin/Template/header', $data);
        echo view('Admin/Template/sidebar', $data);
        echo view('Admin/Prestasi/detail-prestasi', $data);
        echo view('Admin/Template/footer', $data);
    }

    public function update_prestasi_walikelas()
    {
        $modelPrestasi = new M_Prestasi;

        $idUpdate = session()->get('idUpdate');
        $validasi = $this->request->getPost('validasi');

        if($validasi=="2"){
            $dataUpdate = [
                'persetujuan_walikelas' => $validasi,
                'persetujuan_wakasek' => $validasi
            ];
        }
        elseif($validasi=="1"){
            $dataUpdate = [
                'persetujuan_walikelas' => $validasi
            ];
        }    
        $whereUpdate = ['id_prestasi' => $idUpdate];
        $modelPrestasi->updateDataPrestasi($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Prestasi Berhasil Divalidasi!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-acc-prestasi');?>";
        </script>
        <?php
    }

    public function update_prestasi_wakasek()
    {
        $modelPrestasi = new M_Prestasi;

        $idUpdate = session()->get('idUpdate');
        $validasi = $this->request->getPost('validasi');

        $dataUpdate = [
            'persetujuan_wakasek' => $validasi
        ];   
        $whereUpdate = ['id_prestasi' => $idUpdate];
        $modelPrestasi->updateDataPrestasi($dataUpdate, $whereUpdate);
        session()->remove('idUpdate');
        session()->setFlashdata('success','Data Prestasi Berhasil Divalidasi!!');
        ?>
        <script> 
        document.location = "<?= base_url('admin/master-acc-prestasi');?>";
        </script>
        <?php
    }    

    public function logout()
    {
        session()->remove('ses_id');
        session()->remove('ses_level');
        session()->remove('ses_namauser');
        session()->setFlashdata('info','Anda Telah Keluar!!');
        ?>
            <script>
                document.location = "<?= base_url('admin/login');?>";
            </script>
            <?php
    }
}

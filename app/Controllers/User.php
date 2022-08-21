<?php
namespace App\Controllers;
use App\Models\M_User; 
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


class User extends BaseController
{
    public function antiinjection($data)
    {
        $filter_sql = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
        return $filter_sql;
    }

    public function index()
    {
        return view('User/Login/login');
    }

    public function opsi_kota()
    {
        $modelKota = new M_Kota;
        $uri = service('uri');
        $where = ['id_provinsi' => $this->antiinjection($uri->getSegment(3))];
        $hasilKota = $modelKota->getDataKota($where);
        $data['data_kota'] = $hasilKota->getResultArray();
        return view('User/Prestasi/opsi_kota', $data);
    }

    public function autentikasi_login()
    {
        $modelSiswa = new M_Siswa;

        $username = $this->antiinjection($this->request->getpost('username'));
        $password = $this->antiinjection(sha1($this->request->getpost('password')));
        
        $cekUsername = $modelSiswa->getDataSiswa(['nis_siswa' => $username])->getNumRows();
        $cekPassword = $modelSiswa->getDataSiswa(['nis_siswa' => $username, 'passw_siswa' => $password])->getNumRows();
        if($cekUsername == 0){
            session()->setFlashdata('error','Maaf, Username Tidak Ditemukan!!');
            ?>
            <script>
                document.location = "<?= base_url('user/login');?>";
            </script>
            <?php
        }
        elseif($cekPassword == 0){
            session()->setFlashdata('error','Kombinasi Username dan Password Salah!!')
            ?>
            <script>
                document.location = "<?= base_url('user/login');?>";
            </script>
            <?php
        }
        else {
            $dataUser = $modelSiswa->getDataSiswa(['nis_siswa' => $username, 'passw_siswa' => $password])->getRowArray();
            $dataSession = [
                'ses_id' => $dataUser['nis_siswa'],
                'ses_namauser' => $dataUser['nama_siswa']
            ];
            session()->set($dataSession);
            ?>
            <script>
                document.location = "<?= base_url('user/dashboard-user');?>";
            </script>
            <?php
        }
    }

    public function dashboard()
    {
        $modelPrestasi = new M_Prestasi;
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Dashboard User";

        echo view('User/Template/header', $data);
        echo view('User/Template/sidebar', $data);
        echo view('User/Login/dashboard', $data);
        echo view('User/Template/footer', $data);
    }

    // Awal modul untuk Prestasi
    public function master_prestasi()
    {
        $modelPrestasi = new M_Prestasi;
        // Mengambil data keseluruhan prestasi dari table prestasi di database
        $dataPrestasi = $modelPrestasi->getDataPrestasiJoin(['tbl_prestasi.nis_siswa' => session()->get('ses_id')])->getResultArray();

        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Master Data Prestasi";
        $data['dataPrestasi'] = $dataPrestasi; // mengirim array data prestasi ke view

        echo view('User/Template/header', $data);
        echo view('User/Template/sidebar', $data);
        echo view('User/Prestasi/master-data-prestasi', $data);
        echo view('User/Template/footer', $data);
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

        echo view('User/Template/header', $data);
        echo view('User/Template/sidebar', $data);
        echo view('User/Prestasi/detail-prestasi', $data);
        echo view('User/Template/footer', $data);
    }

    public function edit_prestasi()
    {
        $modelTingkat = new M_Tingkat;
        $modelBidang = new M_Bidang;
        $modelGelar = new M_Gelar;
        $modelEkskul = new M_Ekskul;
        $modelProvinsi = new M_Provinsi;
        $modelKota = new M_Kota;
        
        $uri = service('uri');
        $idEdit = $uri->getSegment(3);

        $modelPrestasi = new M_Prestasi;
        // Mengambil data keseluruhan prestasi dari table prestasi di database
        $dataPrestasi = $modelPrestasi->getDataPrestasi(['sha1(id_prestasi)' => $idEdit])->getRowArray();
        session()->set(['idUpdate' => $dataPrestasi['id_prestasi']]);

        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Edit Data Prestasi";
        $data['data_prestasi'] = $dataPrestasi; // mengirim array data prestasi ke view
        $data['data_tingkat'] = $modelTingkat->getDataTingkat()->getResultArray();
        $data['data_bidang'] = $modelBidang->getDataBidang()->getResultArray();
        $data['data_gelar'] = $modelGelar->getDataGelar()->getResultArray();
        $data['data_ekskul'] = $modelEkskul->getDataEkskul()->getResultArray();
        $data['data_provinsi'] = $modelProvinsi->getDataProvinsi()->getResultArray();
        $data['data_kota'] = $modelKota->getDataKota()->getResultArray();

        echo view('User/Template/header', $data);
        echo view('User/Template/sidebar', $data);
        echo view('User/Prestasi/edit-prestasi', $data);
        echo view('User/Template/footer', $data);
    }

    public function update_prestasi()
    {
        $modelPrestasi = new M_Prestasi;

        $idUpdate = session()->get('idUpdate');
        $jenisp = $this->request->getPost('jenisp');
        $tingkat = $this->request->getPost('tingkat');
        $bidang = $this->request->getPost('bidang');
        $gelar = $this->request->getPost('gelar');
        $pembina = $this->request->getPost('pembina');
        $ekskul = $this->request->getPost('ekskul');
        $nama = $this->request->getPost('nama');
        $tempat = $this->request->getPost('tempat');
        $provinsi = $this->request->getPost('provinsi');
        $kota = $this->request->getPost('kota');
        $penyelenggara = $this->request->getPost('penyelenggara');
        $jml_sklh = $this->request->getPost('jml_sklh');
        $jml_peserta = $this->request->getPost('jml_peserta');
        $waktu = $this->request->getPost('waktu');
        $bukti_sertif = $this->request->getPost('bukti_sertif');
        $bukti_kegiatan= $this->request->getPost('bukti_kegiatan');

        if($this->request->getFile('bukti_sertif') != "" and $this->request->getFile('bukti_kegiatan') != ""){
            if(!$this->validate([
                'bukti_sertif' => 'uploaded[bukti_sertif]|max_size[bukti_sertif, 2048]|ext_in[bukti_sertif,jpg,png,jpeg]',
            ])){
                session()->setFlashdata('error', "File yang Diizinkan jpg,png,jpeg dengan Maksimal Size 1Mb!!");
                
                return redirect()->to('/user/edit-prestasi/'.sha1(session()->get('idUpdate')))->withInput();
            }

            if(!$this->validate([
                'bukti_kegiatan' => 'uploaded[bukti_kegiatan]|max_size[bukti_kegiatan, 1048]|ext_in[bukti_kegiatan,jpg,png,jpeg]',
            ])){
                session()->setFlashdata('error', "File yang Diizinkan jpg,png,jpeg dengan Maksimal Size 1Mb!!");
                
                return redirect()->to('/user/edit-prestasi/'.sha1(session()->get('idUpdate')))->withInput();
            }

            $dataUpdate = $modelPrestasi->getDataPrestasi(['id_prestasi' => $idUpdate])->getRowArray();
            
            if(file_exists('Assets/Sertifikat_Prestasi/'.$dataUpdate['bukti_sertif'])){
                unlink('Assets/Sertifikat_Prestasi/'.$dataUpdate['bukti_sertif']); // hapus file yang lama
            }

            if(file_exists('Assets/Kegiatan_Prestasi/'.$dataUpdate['bukti_kegiatan'])){
                unlink('Assets/Kegiatan_Prestasi/'.$dataUpdate['bukti_kegiatan']); // hapus file yang lama
            }

            $bukti_sertif = $this->request->getFile('bukti_sertif');
            $ext1 = $bukti_sertif->getClientExtension();
            $namaFile1 = "Sertifikat-".date("ymdHis").".".$ext1;
            $bukti_sertif->move('Assets/Sertifikat_Prestasi',$namaFile1);

            $bukti_kegiatan = $this->request->getFile('bukti_kegiatan');
            $ext2 = $bukti_kegiatan->getClientExtension();
            $namaFile2 = "Kegiatan-".date("ymdHis").".".$ext2;
            $bukti_kegiatan->move('Assets/Kegiatan_Prestasi',$namaFile2);

            $dataUpdate = [
                'jenis_prestasi' => $jenisp,
                'id_tingkat' => $tingkat,
                'id_bidang' => $bidang,
                'id_gelar' => $gelar,
                'nama_pembina' => $pembina,
                'id_ekskul' => $ekskul,
                'nama_kegiatan' => $nama,
                'tempat' => $tempat,
                'id_provinsi' => $provinsi,
                'id_kota' => $kota,
                'penyelenggara' => $penyelenggara,
                'jumlah_sekolah' => $jml_sklh,
                'jumlah_peserta' => $jml_peserta,
                'waktu_pelaksanaan' => $waktu,
                'bukti_sertif' => $namaFile1,
                'bukti_kegiatan' => $namaFile2
            ];
            $whereUpdate = ['id_prestasi' => $idUpdate];

            $modelPrestasi->updateDataPrestasi($dataUpdate, $whereUpdate);
            session()->remove('idUpdate');
            session()->setFlashdata('success','Data Prestasi Berhasil Diperbaharui!!');
            ?>
            <script> 
            document.location = "<?= base_url('user/master-prestasi');?>";
            </script>
            <?php
        }
        elseif($this->request->getFile('bukti_sertif') != ""){
            if(!$this->validate([
                'bukti_sertif' => 'uploaded[bukti_sertif]|max_size[bukti_sertif, 2048]|ext_in[bukti_sertif,jpg,png,jpeg]',
            ])){
                session()->setFlashdata('error', "File yang Diizinkan jpg,png,jpeg dengan Maksimal Size 1Mb!!");
                
                return redirect()->to('/user/edit-prestasi/'.sha1(session()->get('idUpdate')))->withInput();
            }

            $dataUpdate = $modelPrestasi->getDataPrestasi(['id_prestasi' => $idUpdate])->getRowArray();
            if(file_exists('Assets/Sertifikat_Prestasi/'.$dataUpdate['bukti_sertif'])){
                unlink('Assets/Sertifikat_Prestasi/'.$dataUpdate['bukti_sertif']); // hapus file yang lama
            }

            $bukti_sertif = $this->request->getFile('bukti_sertif');
            $ext1 = $bukti_sertif->getClientExtension();
            $namaFile1 = "Sertifikat-".date("ymdHis").".".$ext1;
            $bukti_sertif->move('Assets/Sertifikat_Prestasi',$namaFile1);

            $dataUpdate = [
                'jenis_prestasi' => $jenisp,
                'id_tingkat' => $tingkat,
                'id_bidang' => $bidang,
                'id_gelar' => $gelar,
                'nama_pembina' => $pembina,
                'id_ekskul' => $ekskul,
                'nama_kegiatan' => $nama,
                'tempat' => $tempat,
                'id_provinsi' => $provinsi,
                'id_kota' => $kota,
                'penyelenggara' => $penyelenggara,
                'jumlah_sekolah' => $jml_sklh,
                'jumlah_peserta' => $jml_peserta,
                'waktu_pelaksanaan' => $waktu,
                'bukti_sertif' => $namaFile1
            ];
            $whereUpdate = ['id_prestasi' => $idUpdate];

            $modelPrestasi->updateDataPrestasi($dataUpdate, $whereUpdate);
            session()->remove('idUpdate');
            session()->setFlashdata('success','Data Prestasi Berhasil Diperbaharui!!');
            ?>
            <script> 
            document.location = "<?= base_url('user/master-prestasi');?>";
            </script>
            <?php
        }
        elseif($this->request->getFile('bukti_kegiatan') != ""){
            if(!$this->validate([
                'bukti_kegiatan' => 'uploaded[bukti_kegiatan]|max_size[bukti_kegiatan, 1048]|ext_in[bukti_kegiatan,jpg,png,jpeg]',
            ])){
                session()->setFlashdata('error', "File yang Diizinkan jpg,png,jpeg dengan Maksimal Size 1Mb!!");
                
                return redirect()->to('/user/edit-prestasi/'.sha1(session()->get('idUpdate')))->withInput();
            }

            $dataUpdate = $modelPrestasi->getDataPrestasi(['id_prestasi' => $idUpdate])->getRowArray();
            if(file_exists('Assets/Kegiatan_Prestasi/'.$dataUpdate['bukti_kegiatan'])){
                unlink('Assets/Kegiatan_Prestasi/'.$dataUpdate['bukti_kegiatan']); // hapus file yang lama
            }

            $bukti_kegiatan = $this->request->getFile('bukti_kegiatan');
            $ext2 = $bukti_kegiatan->getClientExtension();
            $namaFile2 = "Kegiatan-".date("ymdHis").".".$ext2;
            $bukti_kegiatan->move('Assets/Kegiatan_Prestasi',$namaFile2);

            $dataUpdate = [
                'jenis_prestasi' => $jenisp,
                'id_tingkat' => $tingkat,
                'id_bidang' => $bidang,
                'id_gelar' => $gelar,
                'nama_pembina' => $pembina,
                'id_ekskul' => $ekskul,
                'nama_kegiatan' => $nama,
                'tempat' => $tempat,
                'id_provinsi' => $provinsi,
                'id_kota' => $kota,
                'penyelenggara' => $penyelenggara,
                'jumlah_sekolah' => $jml_sklh,
                'jumlah_peserta' => $jml_peserta,
                'waktu_pelaksanaan' => $waktu,
                'bukti_kegiatan' => $namaFile2
            ];
            $whereUpdate = ['id_prestasi' => $idUpdate];

            $modelPrestasi->updateDataPrestasi($dataUpdate, $whereUpdate);
            session()->remove('idUpdate');
            session()->setFlashdata('success','Data Prestasi Berhasil Diperbaharui!!');
            ?>
            <script> 
            document.location = "<?= base_url('user/master-prestasi');?>";
            </script>
            <?php
        }
        else{
            $dataUpdate = [
                'id_tingkat' => $tingkat,
                'id_bidang' => $bidang,
                'id_gelar' => $gelar,
                'nama_pembina' => $pembina,
                'id_ekskul' => $ekskul,
                'nama_kegiatan' => $nama,
                'tempat' => $tempat,
                'id_provinsi' => $provinsi,
                'id_kota' => $kota,
                'penyelenggara' => $penyelenggara,
                'jumlah_sekolah' => $jml_sklh,
                'jumlah_peserta' => $jml_peserta,
                'waktu_pelaksanaan' => $waktu
            ];
            $whereUpdate = ['id_prestasi' => $idUpdate];

            $modelPrestasi->updateDataPrestasi($dataUpdate, $whereUpdate);
            session()->remove('idUpdate');
            session()->setFlashdata('success','Data Prestasi Berhasil Diperbaharui!!');
            ?>
            <script> 
            document.location = "<?= base_url('user/master-prestasi');?>";
            </script>
            <?php
        }
    }

    public function hapus_prestasi()
    {
        $modelPrestasi = new M_Prestasi;

        $uri = service('uri');
        $idHapus = $uri->getSegment(3);

        $dataHapus = $modelPrestasi->getDataPrestasi(['sha1(id_prestasi)' => $idHapus])->getRowArray();
        if(file_exists('Assets/Sertifikat_Prestasi/'.$dataHapus['bukti_sertif'])){
            unlink('Assets/Sertifikat_Prestasi/'.$dataHapus['bukti_sertif']); // hapus file yang lama
        }

        if(file_exists('Assets/Kegiatan_Prestasi/'.$dataHapus['bukti_kegiatan'])){
            unlink('Assets/Kegiatan_Prestasi/'.$dataHapus['bukti_kegiatan']); // hapus file yang lama
        }

        $modelPrestasi->hapusDataPrestasi(['sha1(id_prestasi)' => $idHapus]);
        session()->setFlashdata('success','Data Prestasi Berhasil Dihapus!!');
        ?>
        <script> 
        document.location = "<?= base_url('user/master-prestasi');?>";
        </script>
        <?php
    }

    public function input_prestasi()
    {
        $modelTingkat = new M_Tingkat;
        $modelBidang = new M_Bidang;
        $modelGelar = new M_Gelar;
        $modelEkskul = new M_Ekskul;
        $modelProvinsi = new M_Provinsi;
        $modelKota = new M_Kota;
        $uri = service('uri');
        $page = $uri->getSegment(2);

        $data['page'] = $page;
        $data['web_title'] = "Input Data Prestasi";
        $data['data_tingkat'] = $modelTingkat->getDataTingkat()->getResultArray();
        $data['data_bidang'] = $modelBidang->getDataBidang()->getResultArray();
        $data['data_gelar'] = $modelGelar->getDataGelar()->getResultArray();
        $data['data_ekskul'] = $modelEkskul->getDataEkskul()->getResultArray();
        $data['data_provinsi'] = $modelProvinsi->getDataProvinsi()->getResultArray();
        $data['data_kota'] = $modelKota->getDataKota()->getResultArray();

        echo view('User/Template/header', $data);
        echo view('User/Template/sidebar', $data);
        echo view('User/Prestasi/input-prestasi', $data);
        echo view('User/Template/footer', $data);
    }

    public function simpan_prestasi()
    {
        $modelPrestasi = new M_Prestasi;

        $jenisp = $this->request->getPost('jenisp');
        $tingkat = $this->request->getPost('tingkat');
        $bidang = $this->request->getPost('bidang');
        $gelar = $this->request->getPost('gelar');
        $pembina = $this->request->getPost('pembina');
        $ekskul = $this->request->getPost('ekskul');
        $nama = $this->request->getPost('nama');
        $tempat = $this->request->getPost('tempat');
        $provinsi = $this->request->getPost('provinsi');
        $kota = $this->request->getPost('kota');
        $penyelenggara = $this->request->getPost('penyelenggara');
        $jml_sklh = $this->request->getPost('jml_sklh');
        $jml_peserta = $this->request->getPost('jml_peserta');
        $waktu = $this->request->getPost('waktu');
        $bukti_sertif = $this->request->getPost('bukti_sertif');
        $bukti_kegiatan= $this->request->getPost('bukti_kegiatan');

        if(!$this->validate([
            'bukti_sertif' => 'uploaded[bukti_sertif]|max_size[bukti_sertif, 2048]|ext_in[bukti_sertif,jpg,png,jpeg]',
        ])){
            session()->setFlashdata('error', "File yang Diizinkan jpg,png,jpeg dengan Maksimal Size 1Mb!!");
            
            return redirect()->to('/user/input-prestasi')->withInput();
        }

        if(!$this->validate([
            'bukti_kegiatan' => 'uploaded[bukti_kegiatan]|max_size[bukti_kegiatan, 1048]|ext_in[bukti_kegiatan,jpg,png,jpeg]',
        ])){
            session()->setFlashdata('error', "File yang Diizinkan jpg,png,jpeg dengan Maksimal Size 1Mb!!");
            
            return redirect()->to('/user/input-prestasi')->withInput();
        }

        $bukti_sertif = $this->request->getFile('bukti_sertif');
        $ext1 = $bukti_sertif->getClientExtension();
        $namaFile1 = "Sertifikat-".date("ymdHis").".".$ext1;
        $bukti_sertif->move('Assets/Sertifikat_Prestasi',$namaFile1);

        $bukti_kegiatan = $this->request->getFile('bukti_kegiatan');
        $ext2 = $bukti_kegiatan->getClientExtension();
        $namaFile2 = "Kegiatan-".date("ymdHis").".".$ext2;
        $bukti_kegiatan->move('Assets/Kegiatan_Prestasi',$namaFile2);
        
        $hasil = $modelPrestasi->autoNumber()->getRowArray();
        if(!$hasil){
            $id = "P001";
        }
        else{
            $kode = $hasil['id_prestasi'];

            $noUrut = (int) substr($kode,-3);
            $noUrut++;
            $id = "P".sprintf("%03s", $noUrut);
        }

        $dataSimpan = [
            'id_prestasi' => $id,
            'jenis_prestasi' => $jenisp,
            'id_tingkat' => $tingkat,
            'id_bidang' => $bidang,
            'id_gelar' => $gelar,
            'nama_pembina' => $pembina,
            'id_ekskul' => $ekskul,
            'nama_kegiatan' => $nama,
            'tempat' => $tempat,
            'id_provinsi' => $provinsi,
            'id_kota' => $kota,
            'persetujuan_walikelas' => '0',
            'persetujuan_wakasek' => '0',
            'penyelenggara' => $penyelenggara,
            'jumlah_sekolah' => $jml_sklh,
            'jumlah_peserta' => $jml_peserta,
            'waktu_pelaksanaan' => $waktu,
            'bukti_sertif' => $namaFile1,
            'bukti_kegiatan' => $namaFile2,
            'nis_siswa' => session()->get('ses_id')
        ];

        $modelPrestasi->saveDataPrestasi($dataSimpan);
        session()->setFlashdata('success','Data Prestasi Berhasil Ditambahkan!!');
        ?>
        <script> 
        document.location = "<?= base_url('user/master-prestasi');?>";
        </script>
        <?php
    }

    public function logout()
    {
        session()->remove('ses_id');
        session()->remove('ses_namauser');
        session()->setFlashdata('info','Anda Telah Keluar!!');
        ?>
            <script>
                document.location = "<?= base_url('/');?>";
            </script>
            <?php
    }
}

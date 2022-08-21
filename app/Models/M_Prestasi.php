<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Prestasi extends Model
{
    protected $table = 'tbl_prestasi';
 
    public function getDataPrestasi($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('id_prestasi','DESC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('id_prestasi','DESC');
            return $query = $builder->get();
        }
    }
    
    public function getDataPrestasiJoin($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->join('tbl_tingkat','tbl_tingkat.id_tingkat = tbl_prestasi.id_tingkat','LEFT');
            $builder->join('tbl_bidang','tbl_bidang.id_bidang = tbl_prestasi.id_bidang','LEFT');
            $builder->join('tbl_gelar','tbl_gelar.id_gelar = tbl_prestasi.id_gelar','LEFT');
            $builder->join('tbl_ekskul','tbl_ekskul.id_ekskul = tbl_prestasi.id_ekskul','LEFT');
            $builder->join('tbl_provinsi','tbl_provinsi.id_provinsi = tbl_prestasi.id_provinsi','LEFT');
            $builder->join('tbl_kota','tbl_kota.id_kota = tbl_prestasi.id_kota','LEFT');
            $builder->join('tbl_siswa','tbl_siswa.nis_siswa = tbl_prestasi.nis_siswa','LEFT');
            $builder->join('tbl_kelas','tbl_kelas.id_kelas = tbl_prestasi.id_kelas','LEFT');
            /*$builder->join('tbl_kelas','tbl_kelas.level_kelas = tbl_prestasi.level_kelas','LEFT');*/
            $builder->orderBy('tbl_prestasi.id_prestasi','DESC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->join('tbl_tingkat','tbl_tingkat.id_tingkat = tbl_prestasi.id_tingkat','LEFT');
            $builder->join('tbl_bidang','tbl_bidang.id_bidang = tbl_prestasi.id_bidang','LEFT');
            $builder->join('tbl_gelar','tbl_gelar.id_gelar = tbl_prestasi.id_gelar','LEFT');
            $builder->join('tbl_ekskul','tbl_ekskul.id_ekskul = tbl_prestasi.id_ekskul','LEFT');
            $builder->join('tbl_provinsi','tbl_provinsi.id_provinsi = tbl_prestasi.id_provinsi','LEFT');
            $builder->join('tbl_kota','tbl_kota.id_kota = tbl_prestasi.id_kota','LEFT');
            $builder->join('tbl_siswa','tbl_siswa.nis_siswa = tbl_prestasi.nis_siswa','LEFT');
            $builder->join('tbl_kelas','tbl_kelas.id_kelas = tbl_prestasi.id_kelas','LEFT');
            $builder->orderBy('tbl_prestasi.id_prestasi','DESC');
            return $query = $builder->get();
        }
    }

    public function getJenisPrestasi($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('id_prestasi','DESC');
            $builder->groupBy("jenis_prestasi");
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('id_prestasi','DESC');
            $builder->groupBy("jenis_prestasi");
            return $query = $builder->get();
        }
    }

    /*public function getKelas($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('id_prestasi','DESC');
            $builder->join('tbl_kelas','tbl_kelas.id_kelas = tbl_prestasi.id_kelas','LEFT');
            $builder->groupBy("id_kelas");
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('id_prestasi','DESC');
            $builder->join('tbl_kelas','tbl_kelas.id_kelas = tbl_prestasi.id_kelas','LEFT');
            $builder->groupBy("id_kelas");
            return $query = $builder->get();
        }
    }*/

    public function saveDataPrestasi($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataPrestasi($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataPrestasi($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_prestasi");
        $builder->orderBy("id_prestasi", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
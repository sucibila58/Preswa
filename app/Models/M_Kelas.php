<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kelas extends Model
{
    protected $table = 'tbl_kelas';
 
    public function getDataKelas($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_kelas','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_kelas','ASC');
            return $query = $builder->get();
        }
    }
    
    public function getDataKelasJoin($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->join('tbl_guru','tbl_guru.id_guru = tbl_kelas.id_guru','LEFT');
            $builder->orderBy('tbl_kelas.nama_kelas','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->join('tbl_guru','tbl_guru.id_guru = tbl_kelas.id_guru','LEFT');
            $builder->orderBy('tbl_kelas.nama_kelas','ASC');
            return $query = $builder->get();
        }
    }

    public function saveDataKelas($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataKelas($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataKelas($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_kelas");
        $builder->orderBy("id_kelas", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
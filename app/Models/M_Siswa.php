<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Siswa extends Model
{
    protected $table = 'tbl_siswa';
 
    public function getDataSiswa($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('id_kelas','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('id_kelas','ASC');
            return $query = $builder->get();
        }
    }
    
    public function getDataSiswaJoin($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->join('tbl_kelas','tbl_kelas.id_kelas = tbl_siswa.id_kelas','LEFT');
            $builder->orderBy('tbl_siswa.id_kelas','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->join('tbl_kelas','tbl_kelas.id_kelas = tbl_siswa.id_kelas','LEFT');
            $builder->orderBy('tbl_siswa.id_kelas','ASC');
            return $query = $builder->get();
        }
    }

    public function saveDataSiswa($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataSiswa($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataSiswa($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_siswa");
        $builder->orderBy("id_siswa", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
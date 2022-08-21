<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Ekskul extends Model
{
    protected $table = 'tbl_ekskul';
 
    public function getDataEkskul($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_ekskul','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_ekskul','ASC');
            return $query = $builder->get();
        }
    }
    
    public function getDataEkskulJoin($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->join('tbl_guru','tbl_guru.id_guru = tbl_ekskul.id_guru','LEFT');
            $builder->orderBy('tbl_ekskul.nama_ekskul','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->join('tbl_guru','tbl_guru.id_guru = tbl_ekskul.id_guru','LEFT');
            $builder->orderBy('tbl_ekskul.nama_ekskul','ASC');
            return $query = $builder->get();
        }
    }

    public function saveDataEkskul($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataEkskul($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataEkskul($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_ekskul");
        $builder->orderBy("id_ekskul", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
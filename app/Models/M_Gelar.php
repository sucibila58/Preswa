<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Gelar extends Model
{
    protected $table = 'tbl_gelar';
 
    public function getDataGelar($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_gelar','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_gelar','ASC');
            return $query = $builder->get();
        }
    }
    
    public function saveDataGelar($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataGelar($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataGelar($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_gelar");
        $builder->orderBy("id_gelar", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
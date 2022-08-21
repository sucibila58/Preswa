<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Tingkat extends Model
{
    protected $table = 'tbl_tingkat';
 
    public function getDataTingkat($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_tingkat','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_tingkat','ASC');
            return $query = $builder->get();
        }
    }
    
    public function saveDataTingkat($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataTingkat($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataTingkat($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_tingkat");
        $builder->orderBy("id_tingkat", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
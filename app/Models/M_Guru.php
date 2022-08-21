<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Guru extends Model
{
    protected $table = 'tbl_guru';
 
    public function getDataGuru($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_guru','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_guru','ASC');
            return $query = $builder->get();
        }
    }
    
    public function saveDataGuru($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataGuru($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataGuru($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_guru");
        $builder->orderBy("id_guru", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
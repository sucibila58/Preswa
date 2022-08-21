<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Provinsi extends Model
{
    protected $table = 'tbl_provinsi';
 
    public function getDataProvinsi($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_provinsi','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_provinsi','ASC');
            return $query = $builder->get();
        }
    }
    
    public function saveDataProvinsi($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataProvinsi($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataProvinsi($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_provinsi");
        $builder->orderBy("id_provinsi", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
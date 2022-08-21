<?php
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_Kota extends Model
{
    protected $table = 'tbl_kota';
 
    public function getDataKota($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->orderBy('nama_kota','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->orderBy('nama_kota','ASC');
            return $query = $builder->get();
        }
    }
    
    public function getDataKotaJoin($where = false)
    {
        if ($where === false) {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->join('tbl_provinsi','tbl_provinsi.id_provinsi = tbl_kota.id_provinsi','LEFT');
            $builder->orderBy('tbl_kota.nama_kota','ASC');
            return $query = $builder->get();
        } else {
            $builder = $this->db->table($this->table);
            $builder->select('*');
            $builder->where($where);
            $builder->join('tbl_provinsi','tbl_provinsi.id_provinsi = tbl_kota.id_provinsi','LEFT');
            $builder->orderBy('tbl_kota.nama_kota','ASC');
            return $query = $builder->get();
        }
    }

    public function saveDataKota($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function updateDataKota($data, $where)
    {
        $builder = $this->db->table($this->table);
        $builder->where($where);
        return $builder->update($data);
    }

    public function hapusDataKota($where)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete($where);
    }
    
    public function autoNumber() {
        $builder = $this->db->table($this->table);
        $builder->select("id_kota");
        $builder->orderBy("id_kota", "DESC");
        $builder->limit(1);
        return $query = $builder->get();
	}
}
?>
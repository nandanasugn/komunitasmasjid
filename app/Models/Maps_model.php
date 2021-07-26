<?php namespace App\Models;

use CodeIgniter\Model;

class Maps_model extends Model{
    protected $table = "lokasimasjid";

    public function insert_maps($data){
        return $this->db->table($this->table)->insert($data);
    }

    public function update_maps($data, $id){
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }

    public function delete_maps($id){
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function get_maps($id = false){
        if($id === false){
            return $this->table('lokasimasjid')
                        ->get()
                        ->getResultArray();
        } else{
            return $this->table('lokasimasjid')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }
    }
}
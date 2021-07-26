<?php namespace App\Models;

use CodeIgniter\Model;

class Mapsjson_model extends Model{
    protected $table = "lokasimasjid";

    public function getMapsjson($id = null){
        if($id == null){
            return $this->findAll();
        } else{
            return $this->getWhere('id', $id)->getRowArray();
        }
    }
}
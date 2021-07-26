<?php namespace App\Controllers;

use App\Models\Mapsjson_model;
use CodeIgniter\RESTful\ResourceController;

class Mapsjson extends ResourceController{

    protected $format = 'json';
    protected $modelName = 'App\Models\Mapsjson_model';

    public function __construct()
    {
        $this->mapsjson = new Mapsjson_model();
    }

    public function index()
    {
        $mapsjson = $this->mapsjson->getMapsjson();

        foreach($mapsjson as $row){
            $mapsjson_all[] = [
                'id' => \intval($row['id']),
                'name' => $row['name'],
                'address' => $row['address'],
                'url' => $row['url'],
                'date' => $row['date'],
                'status' => $row['status'],
                'cleaned' => $row['cleaned'],
                'lat' => $row['lat'],
                'lon' => $row['lon'],
            ];
        }

        $mapsjson_all_data["data"] = $mapsjson_all;

        return $this->respond($mapsjson_all_data, 200);
    }
}
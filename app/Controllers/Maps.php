<?php namespace App\Controllers;

use App\Models\Maps_model;

class Maps extends BaseController{

    public function __construct()
    {
        $this->maps = new Maps_model();
    }

    public function index(){
        $data['maps'] = $this->maps->get_maps();
        return view('maps/index', $data);
    }

    public function create(){
        return view('maps/create');
    }

    public function store(){
        $name = $this->request->getPost('name');
        $address = $this->request->getPost('address');
        $url = $this->request->getPost('url');
        $date = $this->request->getPost('date');
        $status = $this->request->getPost('status');
        $cleaned = $this->request->getPost('cleaned');
        $lat = $this->request->getPost('lat');
        $lon = $this->request->getPost('lon');

        $data = [
            'name' => $name,
            'address' => $address,
            'url' => $url,
            'date' => $date,
            'status' => $status,
            'cleaned' => $cleaned,
            'lat' => $lat,
            'lon' => $lon
        ];

        $simpan = $this->maps->insert_maps($data);

        if($simpan){
            session()->setFlashdata('success', 'Created maps successfully!');
            return redirect()->to('/maps');
        } else{
            session()->setFlashdata('error', 'Created maps failed!');
            return redirect()->to('/maps');
        }
    }

    public function show($id){
        $data['map'] = $this->maps->get_maps($id);
        return view('maps/show', $data);
    }

    public function edit($id){
        $data['map'] = $this->maps->get_maps($id);
        return view('maps/edit', $data);
    }

    public function update($id){
        $name = $this->request->getPost('name');
        $address = $this->request->getPost('address');
        $gambar = $this->request->getFile('url');
        $date = $this->request->getPost('date');
        $status = $this->request->getPost('status');
        $cleaned = $this->request->getPost('cleaned');
        $lat = $this->request->getPost('lat');
        $lon = $this->request->getPost('lon');

        $gambar->move(ROOTPATH. 'public/uploads');
        $url = base_url(). '/uploads/' . $gambar->getName();

        $data = [
            'name' => $name,
            'address' => $address,
            'url' => $url,
            'date' => $date,
            'status' => $status,
            'cleaned' => $cleaned,
            'lat' => $lat,
            'lon' => $lon
        ];

        $ubah = $this->maps->update_maps($data, $id);

        if($ubah){
            session()->setFlashdata('success', 'Updated maps successfully!');
            return redirect()->to('/maps');
        } else{
            session()->setFlashdata('error', 'Updated maps failed!');
            return redirect()->to('/maps');
        }
    }

    public function delete($id){
        $hapus = $this->maps->delete_maps($id);

        if($hapus){
            session()->setFlashdata('success', 'Deleted maps successfully!');
            return redirect()->to('/maps');
        } else{
            session()->setFlashdata('error', 'Deleted maps failed!');
            return redirect()->to('/maps');
        }
    }
}
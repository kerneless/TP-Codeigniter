<?php

namespace App\Controllers;

use App\Models\ConsolasModel;

class Home extends BaseController
{
    public function index()
    {
        $consolasModel = new ConsolasModel();
        $consolas =  $consolasModel->findAll();
        $data = ["consolas" => $consolas];
        return view('home', $data);
    }

    public function detalle($id) {
        $consolasModel = new ConsolasModel();
        $consola =  $consolasModel->find($id);

        if ($consola === null) {
            return view('error');

        } 
            
        $data = ["consola" => $consola];
        return view('detalle', $data);

    }
}

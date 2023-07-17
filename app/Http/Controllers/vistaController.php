<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Http\Request; 

class vistaController extends Controller {

    public function evento(){
        return view('Vista.eventos');
    }

    public function servicio(){
        return view('Vista.servicios');
    }
}
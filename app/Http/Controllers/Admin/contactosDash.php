<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Contacto;

class ContactosDash extends Controller
{
    public $contactos;
    public function index()
    {

        $this->contactos = Contacto::all();
        return view('admin.contactos');
    }
    
}
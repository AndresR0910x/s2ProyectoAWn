<?php 


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Htpp\Controllers\Admin\Contactos;

Route::get('',[HomeController::class, 'index']); 
<?php

namespace App\Http\Controllers\Vistas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VistasController extends Controller
{
    
    public function inicio()
    {
        return view('front.inicio');
    }
    public function contactos()
    {
        return view('front.contactos');
    }
        public function nosotros()
    {
        return view('front.nosotros');
    }

}
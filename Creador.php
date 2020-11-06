<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Creador extends Controller
{
    public function plantilla(){
        return view('plantilla');
    }

    public function vincent(){
        return view('vincent');
    }

    public function claude(){
        return view('claude');
    }

    public function pablo(){
        return view('pablo');
    }

    public function salvador(){
        return view('salvador');
    }

    public function leonardo(){
        return view('leonardo');
    }
}

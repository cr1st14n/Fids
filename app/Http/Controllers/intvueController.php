<?php

namespace App\Http\Controllers;

use App\Models\Itinerario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class intvueController extends Controller
{
    public function home()
    {
        return view('Vuelos.Intinerarios');
    }
    
}

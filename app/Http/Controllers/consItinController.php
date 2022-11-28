<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class consItinController extends Controller
{
    public function cons1()
    {
        // return DB::select('sp_prueba_1');
        return 'hola mund';
        return 'hola mundo ';
        return  DB::select("exec spListaItinerario  '2022-12-31 00:00:00.000'");
        return DB::table('Itinerarios')->where('idItin', '475120')->update(['MensajeenFids' => 'hola mundo ']);
        return DB::table('Itinerarios')->select('*')->limit(100000)->get();
        return  DB::select("exec spDetRutasFids  '3575089'");
        return  DB::select("exec spDetalleItinerario  '3575089'");
        return  DB::select("exec spListaItinerario  '2009-01-14 00:00:00.000'");
        return  DB::select("exec DetalleItinerario -180,180,'T50026'");
    }
}

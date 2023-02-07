<?php

namespace App\Http\Controllers;

use App\Models\Itinerario;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class itinerarioController extends Controller
{
    public function test(Request $request)
    {
        return  Itinerario::select('*')
            ->join('Puertas as p', 'p.idPuerta', 'Itinerarios.idPuerta')
            ->select('Itinerarios.*', 'p.NomPuerta')
            ->limit(2)
            ->get();




        return DB::table('Itinerarios')->select('*')->limit(100000)->get();
        return DB::table('Itinerarios')->where('idItin', '475120')->update(['MensajeenFids' => 'hola mundo ']);
        // return 'hola mundo';
        return  DB::select("exec spListaItinerario  '2022-12-31 00:00:00.000'");
        // return 'hols ';
        // return  DB::select("exec spDetRutasFids  '3575089'");
        // return  DB::select("exec spDetalleItinerario  '3575089'");
        //   return  DB::select("exec spListaItinerario  '2009-01-14 00:00:00.000'");
        //   return  DB::select("exec DetalleItinerario -180,180,'T50026'");

        return DB::connection('sqlsrv')->select('* FROM ITINERARIOS');
        // $lectura = DB::connection('sqlsrv')->select("declare @result_code as int ; EXEC reg_lectura_v $request->codigo_ciclo,$request->codigo_medidor,$request->codigo_predio,$request->codigo_tipo_servicio,$request->numero_cuenta,'$lectura_',$request->cuadrilla,$request->agente,'$request->estado_lectura','$request->motivo_estado','$request->observacion','$request->usuario_ingreso',$request->rango_maximo,$request->rango_minimo,$request->lectura_anterior,$request->consumo,$request->consumo_promedio,'$request->latitud','$request->longitud', $request->act_medidor,$v,@result_code OUTPUT; select @result_code as RES");;
    }
    public function list_vuelos(Request $request)
    {
        if ($request->input('tipo') == 'L') {       
            $data = Itinerario::whereDate('FECHA', Carbon::now()->format('Y-m-d'))
                ->where('AEROPUERTO', $request->input('aero'))
                ->where('TIPO_OPERACION', $request->input('tipo'))
                ->whereNot('OBSERVACION', 'ARRIBO')
                ->orderBy('CORRELATIVO', 'asc')
                ->get();
        } else {
            $data = Itinerario::whereDate('FECHA', Carbon::now()->format('Y-m-d'))
                ->where('AEROPUERTO', $request->input('aero'))
                ->where('TIPO_OPERACION', $request->input('tipo'))
                ->whereNot('OBSERVACION_INGLES', '@@CERRADO')
                ->whereNot('OBSERVACION_INGLES', '@@ARRIBO')
                ->whereNot('OBSERVACION_INGLES', 'CLOSED')
                ->orderBy('CORRELATIVO', 'asc')
                ->get();
        }
        return $data;
    }
    public function view_1()
    {
        return view('itin2');
    }
}

<?php

namespace App\Http\Controllers;

use App\Abonopensiones;
use App\Cobrospension;
use App\Residentes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidentesController extends Controller
{
    //funcion para traer datos básicos de los residentes
    public function index(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');
        $buscar= $request->buscar;
        $criterio= $request->criterio;

        if ($buscar=='') {
            $residentes = Residentes::join("asociacion","residentes.idresidentes","=","asociacion.idresidentes")
                ->join("usuarios","asociacion.idusuarios","=","usuarios.idusuarios")
                ->join("cobrospension","residentes.idresidentes","=","cobrospension.idresidentes")
                ->join("abonopensiones","cobrospension.idcobrospension","=","abonopensiones.idcobrospension")
                ->select('residentes.idresidentes','residentes.documentor',
                'residentes.estado as estado','usuarios.telefono as telefono',
                DB::raw('UPPER (concat(residentes.nombresr," ",residentes.apellidosr)) as residente'),
                DB::raw('UPPER (concat(usuarios.nombres," ",usuarios.apellidos)) as acudiente'),
                DB::raw('SUM(abonopensiones.valorinicial) AS cobro'),
                DB::raw('SUM(abonopensiones.abono) AS abono')
                )
                ->whereIn('residentes.estado', ['A','E'])
                ->groupBy('residentes.idresidentes','residentes.documentor','residentes.estado','usuarios.telefono','residentes.nombresr',
                'residentes.apellidosr','usuarios.nombres','usuarios.apellidos')
                ->orderBy('residentes.idresidentes','desc')
                ->paginate(5);
        }
        else {
            $residentes = Residentes::join("asociacion","residentes.idresidentes","=","asociacion.idresidentes")
            ->join("usuarios","asociacion.idusuarios","=","usuarios.idusuarios")
            ->select('residentes.idresidentes','residentes.documentor',
            DB::raw('UPPER (concat(residentes.nombresr," ",residentes.apellidosr)) as residente'),'residentes.estado as estado',
            DB::raw('UPPER (concat(usuarios.nombres," ",usuarios.apellidos)) as acudiente'),'usuarios.telefono as telefono')
            ->where($criterio, 'like', '%'. $buscar . '%')
            ->orderBy('idresidentes','desc')
            ->paginate(5);
        }

        return [
            'pagination' => [
                'total'         =>$residentes->total(),
                'current_page'  =>$residentes->currentPage(),
                'per_page'      =>$residentes->perPage(),
                'last_page'     =>$residentes->lastPage(),
                'from'          =>$residentes->firstItem(),
                'to'            =>$residentes->lastItem(),
            ],
                'residentes' => $residentes,
        ];
    }
}

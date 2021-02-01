<?php

namespace App\Http\Controllers;

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
                ->select('residentes.idresidentes','residentes.documentor',DB::raw('concat(residentes.nombresr," ",residentes.apellidosr) as residente'),
                'residentes.estado',DB::raw('concat(usuarios.nombres," ",usuarios.apellidos) as acudiente'),'usuarios.telefono')
                ->whereIn('residentes.estado', ['A','E'])
                ->orderBy('residentes.idresidentes','desc')
                ->paginate(5);
        }
        else {
            $residentes = Residentes::where($criterio, 'like', '%'. $buscar . '%')->orderBy('idresidentes','desc')->paginate(5);
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
                'residentes' => $residentes
        ];
    }
}

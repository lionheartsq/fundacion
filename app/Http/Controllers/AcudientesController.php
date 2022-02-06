<?php

namespace App\Http\Controllers;

use App\Abonopensiones;
use App\Cobrospension;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcudientesController extends Controller
{
    //funcion para traer datos básicos de los usuarios
    public function index(Request $request)
    {
        //if(!$request->ajax()) return redirect('/');
        $buscar= $request->buscar;
        $criterio= $request->criterio;

        if ($buscar=='') {
            $usuarios = User::join("asociacion","usuarios.idusuarios","=","asociacion.idusuarios")
                ->join("usuarios","asociacion.idusuarios","=","usuarios.idusuarios")
                ->join("cobrospension","usuarios.idusuarios","=","cobrospension.idusuarios")
                ->join("abonopensiones","cobrospension.idcobrospension","=","abonopensiones.idcobrospension")
                ->join("abonopensiones","cobrospension.idcobrospension","=","abonopensiones.idcobrospension")
                ->select('usuarios.idusuarios','usuarios.documentor',
                'usuarios.estado as estado','usuarios.telefono as telefono',
                DB::raw('UPPER (concat(usuarios.nombresr," ",usuarios.apellidosr)) as residente'),
                DB::raw('UPPER (concat(usuarios.nombres," ",usuarios.apellidos)) as acudiente'),
                DB::raw('SUM(abonopensiones.valorinicial) AS cobro'),
                DB::raw('SUM(abonopensiones.abono) AS abono')
                )
                ->whereIn('usuarios.estado', ['A','E'])
                ->groupBy('usuarios.idusuarios','usuarios.documentor','usuarios.estado','usuarios.telefono','usuarios.nombresr',
                'usuarios.apellidosr','usuarios.nombres','usuarios.apellidos')
                ->orderBy('usuarios.idusuarios','desc')
                ->paginate(5);
        }
        else {
            $usuarios = User::join("asociacion","usuarios.idusuarios","=","asociacion.idusuarios")
            ->join("usuarios","asociacion.idusuarios","=","usuarios.idusuarios")
            ->select('usuarios.idusuarios','usuarios.documentor',
            DB::raw('UPPER (concat(usuarios.nombresr," ",usuarios.apellidosr)) as residente'),'usuarios.estado as estado',
            DB::raw('UPPER (concat(usuarios.nombres," ",usuarios.apellidos)) as acudiente'),'usuarios.telefono as telefono')
            ->where($criterio, 'like', '%'. $buscar . '%')
            ->orderBy('idusuarios','desc')
            ->paginate(5);
        }

        return [
            'pagination' => [
                'total'         =>$usuarios->total(),
                'current_page'  =>$usuarios->currentPage(),
                'per_page'      =>$usuarios->perPage(),
                'last_page'     =>$usuarios->lastPage(),
                'from'          =>$usuarios->firstItem(),
                'to'            =>$usuarios->lastItem(),
            ],
                'usuarios' => $usuarios,
        ];
    }
}

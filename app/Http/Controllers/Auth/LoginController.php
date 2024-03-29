<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function username()
    {
        return 'documento';
    }

    public function login(Request $request){
        $this->validate($request,[
            'documento'=>'required|string',
            'password'=>'required|string'
        ]);

        Log::info('Showing user profile for user: '.$request);

        if(Auth::attempt(['documento' => $request->documento, 'password' => $request->password, 'estado'=>'A'])){
            return redirect()->route('principal');
        }
        else{
            return back()->withErrors(['documento'=>trans('auth.failed')])
            ->withInput(request(['documento']));
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }

    public function pass(Request $request){
        $idusuarios=$request->idusuarios;
        $clave=$request->passnueva;

        $clavehashed = Hash::make($clave, [
            'rounds' => 12,
        ]);

        $affected = DB::table('usuarios')
              ->where('idusuarios', $idusuarios)
              ->update(['password' => $clavehashed]);
              Auth::logout();
              $request->session()->invalidate();
        return redirect('/login');
    }

}

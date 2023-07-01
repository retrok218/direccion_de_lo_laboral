<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LogController extends Controller
{
    public function login(Request $request){
        $remember = $request->filled('remember'); 
        if(Auth::attempt($request->only('email','password'),$remember)){
            $request->session()->regenerate();
            return redirect('/juicios');
        }
        throw ValidationException::withMessages([
            'password'=>('Las Credenciales no Coinciden')
        ]);  
    }
     public function logout(Request $request, Redirector $redirect){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return $redirect->to('/')->with('status',"Has Cerrado Secion") ;

     }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}

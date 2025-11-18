<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function registerShow(){
        return view ('auth.register');
    }

    public function process(Request $request){

        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ],[
            'email.required' => 'Se necesita el Email.',
            'email.email' => 'Debe contener formato de email',
            'email.exists' => 'El mail ingresado no se encuentra registrado.',
            'password.required' => 'Debe ingresar la contraseña',
        ]);

        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)){
            return to_route('dashboard')->with('feedback', [
                'message' => 'Bienvenido.',
                'type'    => 'success',
            ]);
        }
        return back(fallback: route('auth.login.show'))->withInput()->with('feedback.message', 'Error al ingresar, uruasio o contraseña incorrecto');
    }

    // public function registerProcess(Request $request){

    //     return back(fallback: route('auth.login.show'))->withInput()->with('feedback.message', 'Error al ingresar, uruasio o contraseña incorrecto');
    // }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return to_route('home')->with('feedback', [
                'message' => 'Session cerrada.',
                'type'    => 'info',
        ]);

    }

}


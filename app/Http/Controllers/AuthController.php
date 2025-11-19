<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return back(fallback: route('auth.login.show'))->withInput()->with('feedback', [
                'message' => 'Error al ingresar, mail o contraseña incorrecto.',
                'type'    => 'danger',
            ]);
    }

     public function store(Request $request){

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],[
            'name.required' => 'Debe ingresar un nombre de usuario.',
            'name.min' => 'El nombre de usuario debe contener al menos :min caracteres.',
            'email.required' => 'Se necesita el Email.',
            'email.email' => 'Debe contener formato de email',
            'password.required' => 'Debe ingresar la contraseña',
            'password.min' => 'Debe ingresar al menos :min caracteres'
        ]);

        $data = $request->only(['name', 'email', 'password']);

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        Auth::login($user);

        return to_route('home')->with('feedback.message', 'Usuario generado con exito.');

        return back(fallback: route('auth.login.show'))->withInput()->with('feedback.message', 'Error al ingresar, uruasio o contraseña incorrecto');
     }

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


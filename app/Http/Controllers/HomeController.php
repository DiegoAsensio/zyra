<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\User;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function dashboard(){

        $users = User::where('role', 'user')->with('membership')->get();

        return view('admin.dashboard',[
            'users' => $users,
        ]);
    }


}

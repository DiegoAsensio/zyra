<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembershipsController extends Controller
{
    public function memberships(){

        $memberships = DB::table('memberships')->select('*')->get();


        return view ('memberships',[
            'memberships'=>$memberships,
        ]);
    }

}

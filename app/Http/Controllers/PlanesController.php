<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanesController extends Controller
{
    public function memberships(){
        return view ('plansList');
    }

}

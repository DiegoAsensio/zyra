<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\Tier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MembershipsController extends Controller
{
    public function memberships(){

        $memberships = Membership::with(['tier'])->get();

        return view ('memberships',[
            'memberships'=>$memberships,
        ]);
    }

    public function index(){

        $memberships = Membership::with(['tier'])->get();

        return view ('admin.memberships.index',[
            'memberships'=>$memberships,
        ]);
    }

    public function show($id){

        $membership = Membership::findOrFail($id);

        return view('admin.memberships.show',[
            'membership'=>$membership,
        ]);
    }

    public function create(){

        return view('admin.memberships.create',[
            'tiers' => Tier::all(),
        ]);

    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'tier_id' => 'required',
            'price' => 'required|numeric',
            'daypass' => 'required|numeric',
            'credits' => 'required|numeric',
        ], [
            'name.required' => 'Debe agregar el nombre del plan',
            'tier_id.required' => 'Debe agregar un nivel',
            'price.required' => 'Debe agregar el precio',
            'price.numeric' => 'El valor debe ser numerico',
            'daypass.required' => 'Debe agregar la cantidad de dias que contiene el plan',
            'daypass.numeric' => 'El valor debe ser numerico',
            'credits.required' => 'Debe agregar la cantidad de creditos que contiene el plan',
            'credits.numeric' => 'El valor debe ser numerico',

        ]);

        $data = $request->only(['name', 'tier_id', 'price', 'daypass', 'credits']);

        $membership = Membership::create($data);

        return to_route('memberships.index')->with('feedback.message', 'El plan <b>' . e($data['name']) . '</b> se genero con exito.');

    }

    public function edit(int $id){
        return view('admin.memberships.edit',[
            'membership' => Membership::findOrFail($id),
            'tiers' => Tier::all(),
        ]);
    }

    public function update(Request $request, int $id){

        $request->validate([
            'name' => 'required',
            'tier_id' => 'required',
            'price' => 'required|numeric',
            'daypass' => 'required|numeric',
            'credits' => 'required|numeric',
        ], [
            'name.required' => 'Debe agregar el nombre del plan',
            'tier_id.required' => 'Debe agregar un nivel',
            'price.required' => 'Debe agregar el precio',
            'price.numeric' => 'El valor debe ser numerico',
            'daypass.required' => 'Debe agregar la cantidad de dias que contiene el plan',
            'daypass.numeric' => 'El valor debe ser numerico',
            'credits.required' => 'Debe agregar la cantidad de creditos que contiene el plan',
            'credits.numeric' => 'El valor debe ser numerico',

        ]);

        $data = $request->only(['name', 'tier_id', 'price', 'daypass', 'credits']);

        $membership = Membership::findOrFail($id);

        $membership->update($data);

        return to_route('memberships.index')->with('feedback.message', 'El plan <b>' . e($data['name']) . '</b> se actualizo con exito.');
    }

    public function delete($id){

        return view('admin.memberships.delete', [
            'membership' => Membership::findOrFail($id),
        ]);

    }

    public function destroy($id){

        $membership = Membership::findOrFail($id);

        $membership->delete();

        return to_route('memberships.index')->with('feedback', '<b>' . e($membership['name']) . '</b> fue eliminado con exito.');
    }

}

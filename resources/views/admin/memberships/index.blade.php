<?php
/** @var \Illuminate\Database\Eloquent\Collection $memberships */
?>

<x-layouts.admin>
    <x-slot:title>Dashboard||Membresias</x-slot:title>
    <h1>Panel de control de planes</h1>
    <div>
        <a href="{{ route('memberships.create') }}"> Generar nuevo plan </a>
    </div>

    <table class="table tablestriped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Nivel</th>
                <th>Daypass</th>
                <th>Creditos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $memberships as $membership)
                <tr>
                    <td>{{ $membership->name}}</td>
                    <td>{{ $membership->price}}</td>
                    <td>{{ $membership->tier->name}}</td>
                    <td>{{ $membership->daypass}}</td>
                    <td>{{ $membership->credits}}</td>
                    <td>
                        <a href="{{  route('memberships.show', ['id' => $membership->id]) }}" class="btn btn-primary">Ver mas</a>
                        <a href="{{  route('memberships.edit', ['id' => $membership->id]) }}" class="btn btn-primary">Editar</a>
                        <a href="{{  route('memberships.delete', ['id' => $membership->id]) }}" class="btn btn-danger mt-auto">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</x-layouts.admin>




<?php
/** @var \Illuminate\Database\Eloquent\Collection $memberships */
?>

<x-layouts.main>
    <x-slot:title>Membresias</x-slot:title>
    <h1>Nuestros planes</h1>


    <table class="table tablestriped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Nivel</th>
                <th>Daypass</th>
                <th>Creditos</th>

            </tr>
        </thead>
        <tbody>
            @foreach ( $memberships as $membership)
                <tr>
                    <td>{{ $membership->name}}</td>
                    <td>{{ $membership->price}}</td>
                    <td>{{ $membership->tier->name }}</td>
                    <td>{{ $membership->daypass}}</td>
                    <td>{{ $membership->credits}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>


</x-layouts.main>




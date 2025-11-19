<?php
/** @var \App\Models\Membership $membership */
?>


<x-layouts.admin>
    <x-slot:title>Detalles de {{ $membership->name}}</x-slot:title>
    <h1 class="fw-bold text-primary section-title">{{ $membership->name}}</h1>

    <dl class="mb-3">
        <dt>Precio:</dt>
        <dd>{{ $membership->price}}</dd>
        <dt>Categoria:</dt>
        <dd>{{ $membership->category}}</dd>
        <dt>Daypass:</dt>
        <dd>{{ $membership->daypass}}</dd>
        <dt>Creditos:</dt>
        <dd>{{ $membership->credits}}</dd>
    </dl>

</x-layouts.admin>




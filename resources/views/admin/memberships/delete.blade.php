<x-layouts.admin>

    <x-slot:title>Confirmacion de eliminacion</x-slot:title>

    <h1>Confirmacion para eliminar el plan {{ $membership->name }}</h1>


    <dl class="mb-3">
        <dt>Precio:</dt>
        <dd>{{ $membership->price}}</dd>
        <dt>Nivel:</dt>
        <dd>{{ $membership->tier->name}}</dd>
        <dt>Daypass:</dt>
        <dd>{{ $membership->daypass}}</dd>
        <dt>Creditos:</dt>
        <dd>{{ $membership->credits}}</dd>
    </dl>

    <p>Una vez eliminado el plan no se podran recuperar los datos</p>
    <p>¿Continuar de todos modos?</p>

    <a href="{{ route('memberships.index')}}" class="btn btn-warning">Cancelar</a>
    <form action="{{ route('memberships.destroy', ['id' => $membership->id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>

</x-layouts.admin>

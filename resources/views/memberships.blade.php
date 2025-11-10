<x-layouts.main>
    <x-slot:title>Membresias</x-slot:title>
    <h1>Nuestros planes</h1>

    <table class="table tablestriped table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Categoria</th>
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
                    <td>{{ $membership->category}}</td>
                    <td>{{ $membership->daypass}}</td>
                    <td>{{ $membership->credits}}</td>
                    <td> + - </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</x-layouts>




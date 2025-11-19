<?php
/** @var \Illuminate\Database\Eloquent\Collection $articles */
?>

<x-layouts.admin>
    <x-slot:title>Blog de nocedades</x-slot:title>
    <h1 class="fw-bold text-primary section-title">Bienvenidos al blog de novedades</h1>
    <div>
        <a class="btn btn-primary" href="{{ route('articles.create') }}"> Publicar nuevo articulo </a>
    </div>



    <table class="table tablestriped table-bordered">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Resumen</th>
                <th>categorias</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->title}}</td>
                    <td>{{ $article->summary}}</td>
                    <td>
                        @forelse ($article->categories as $category)
                            <span class="badge bg-primary">{{ $category->name}}</span>
                        @empty
                            <p>No tiene categorias asociadas.</p>
                        @endforelse
                    </td>
                    <td>
                        <a href="{{ route('articles.show', ['id'=>$article->id]) }}" class="btn btn-primary mt-auto">Explorar</a>
                        <a href="{{ route('articles.edit', ['id'=>$article->id]) }}" class="btn btn-secondary mt-auto">Editar</a>
                        <a href="{{ route('articles.delete', ['id'=>$article->id]) }}" class="btn btn-danger mt-auto">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-layouts.admin>


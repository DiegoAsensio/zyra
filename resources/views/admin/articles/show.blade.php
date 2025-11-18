<?php
/** @var \App\Models\Article $article */
?>

<x-layouts.admin>

    <x-slot:title>Blog de nocedades</x-slot:title>


<div class="container my-5">
  <div class="card shadow-sm">
    <h1>{{ $article->title }}</h1>
    @if ($article->cover !== null && \Storage::exists($article->cover))
                <img src="{{ \Storage::url($article->cover) }}" class="card-img-top" alt="{{ $article->description }}">
            @else
                No se encontro imagen
            @endif
    <div class="card-body">
      <p class="text-muted">{{ $article->sumary }}</p>
      <hr>
       @forelse ($article->categories as $category)
                            <span>{{ $category->name}}</span>
                        @empty
                            <p>No tiene categorias asociadas.</p>
                        @endforelse
      <p>{{ $article->content }}</p>
      <a href="{{ route('articles') }}" class="btn btn-outline-secondary mt-3">Volver al blog</a>
    </div>
  </div>
</div>


</x-layouts.admin>


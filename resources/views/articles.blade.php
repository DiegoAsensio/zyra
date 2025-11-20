<?php
/** @var \Illuminate\Database\Eloquent\Collection $articles */
?>

<x-layouts.main>
    <x-slot:title>Blog de novedades</x-slot:title>


<div class="container my-2">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary section-title mb-3">Bienvenidos al blog de novedades</h1>
        <p class="lead text-muted">Encuentra las ultimas noticias del coworking!</p>
    </div>
  <div class="row g-4">
    @foreach ($articles as $article)

    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm" >
            @if ($article->cover !== null && \Storage::exists($article->cover))
                <img src="{{ \Storage::url($article->cover) }}" class="card-img-top article-home" alt="{{ $article->description }}">
            @else
                No se encontro imagen
            @endif
            <div class="card-body">
                <h2 class="card-title">{{ $article->title }}</h2>
                <p class="card-text">{{ $article->summary }}</p>
                <a href="{{ route('articles.show', ['id'=>$article->id]) }}" class="btn btn-primary mt-auto">Explorar</a>
            </div>
        </div>
    </div>



    @endforeach
</div>
</div>

</x-layouts.main>


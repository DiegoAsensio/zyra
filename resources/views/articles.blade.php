<?php
/** @var \Illuminate\Database\Eloquent\Collection $articles */
?>

<x-layouts.main>
    <x-slot:title>Blog de nocedades</x-slot:title>
    <h1>Bienvenidos al blog de novedades</h1>


<div class="container my-5">
  <div class="row g-4">
    @foreach ($articles as $article)

    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm" style="width: 18rem;">
            @if ($article->cover !== null && \Storage::exists($article->cover))
                <img src="{{ \Storage::url($article->cover) }}" class="card-img-top" alt="{{ $article->description }}">
            @else
                No se encontro imagen
            @endif
            <div class="card-body">
                <h2 class="card-title">{{ $article->title }}</h2>
                <p class="card-text">{{ $article->summary }}</p>

            </div>
        </div>
    </div>



    @endforeach
</div>
</div>

</x-layouts.main>


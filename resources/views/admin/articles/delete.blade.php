<x-layouts.admin>
    <x-slot:title>Confirmacion de eliminacion</x-slot:title>

    <h1 class="fw-bold text-primary section-title">Confirmacion de baja</h1>

    <p>Esta por dar de baja la publicacion {{$article->title}}</p>

    <div class="container my-5">
        <div class="card shadow-sm">
            @if ($article->cover !== null && \Storage::exists($article->cover))
                <img src="{{ \Storage::url($article->cover) }}" class="img-fluid" alt="{{ $article->description }}">
            @endif
            <div class="card-body">
              <h2>{{ $article->title }}</h2>
              <p class="text-muted">{{ $article->sumary }}</p>
              <hr>
               @forelse ($article->categories as $category)
                            <span>{{ $category->name}}</span>
                        @empty
                            <p>No tiene categorias asociadas.</p>
                        @endforelse
              <p>{{ $article->content }}</p>
            </div>
        </div>
    </div>

    <p>Una vez eliminada la publicacion no se podran recuperar los datos</p>
    <p>¿Continuar de todos modos?</p>

    <form action="{{ route('articles.destroy', ['id' => $article->id]) }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>

    <a href="{{ route('articles.index') }}" class="btn btn-outline-secondary mt-3">Volver al blog</a>
</x-layouts.admin>


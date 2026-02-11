<?php
/** @var \Illuminate\Database\Eloquent\Collection $articles */
?>

<x-layouts.admin>
    <x-slot:title>Blog de novedades</x-slot:title>
    
    <div class="admin-page-header mb-4">
        <div>
            <h1 class="fw-bold text-primary section-title">Gestión del Blog</h1>
            <p class="text-muted mb-0">Administra las publicaciones de novedades</p>
        </div>
        <a class="btn btn-primary" href="{{ route('articles.create') }}">
            <i class="fas fa-plus me-2"></i> Nueva publicación
        </a>
    </div>

    @if($articles->isEmpty())
        <div class="empty-state">
            <i class="fas fa-newspaper"></i>
            <h3>No hay artículos publicados</h3>
            <p>Comienza creando tu primera publicación</p>
            <a href="{{ route('articles.create') }}" class="btn btn-primary mt-3">
                <i class="fas fa-plus me-2"></i> Crear primer artículo
            </a>
        </div>
    @else
        <div class="row g-4">
            @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        @if ($article->cover !== null && \Storage::exists($article->cover))
                            <img src="{{ \Storage::url($article->cover) }}" 
                                 class="card-img-top" 
                                 style="height: 250px; object-fit: cover;"
                                 alt="{{ $article->description }}">
                        @else
                            <div class="card-img-top bg-light d-flex align-items-center justify-content-center" 
                                 style="height: 250px;">
                                <i class="fas fa-image fa-3x text-muted"></i>
                            </div>
                        @endif
                        
                        <div class="card-body d-flex flex-column">
                            <div class="mb-3">
                                @forelse ($article->categories as $category)
                                    <span class="badge bg-primary me-1 mb-1">{{ $category->name }}</span>
                                @empty
                                    <span class="badge bg-secondary">Sin categoría</span>
                                @endforelse
                            </div>
                            
                            <h2 class="card-title h5 fw-bold text-primary mb-3">
                                {{ $article->title }}
                            </h2>
                            
                            <p class="card-text text-muted mb-4 flex-grow-1">
                                {{ Str::limit($article->summary, 120) }}
                            </p>
                            
                            <div class="d-flex gap-2 mt-auto">
                                <a href="{{ route('articles.edit', ['id' => $article->id]) }}" 
                                   class="btn btn-outline-secondary btn-sm flex-fill">
                                    <i class="fas fa-edit me-1"></i> Editar
                                </a>
                                <a href="{{ route('articles.delete', ['id' => $article->id]) }}" 
                                   class="btn btn-danger btn-sm flex-fill">
                                    <i class="fas fa-trash me-1"></i> Eliminar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-layouts.admin>
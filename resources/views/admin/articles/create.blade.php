<?php
/**@var  \App\Model\Category[] $categories */
?>
<x-layouts.admin>

    <x-slot:title>Publicar noticia</x-slot:title>

    <h1>Publicar Noticia</h1>

    @if ($errors->any() )
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Publicacion no realizada, revise el formulario.</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" @error('title') aria-invalid="true" aria-errormessage="error-title" @enderror value="{{ old('title') }}">
            @error('title')
                <div class="text-danger" id="error-title">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <fieldset>
                <legend>Categorias</legend>
                @foreach ( $categories as $category)
                    <label >
                        <input type="checkbox" name="categories[]" value="{{ $category->id }}" @checked(in_array($category->id, old('categories', [])))>
                        {{ $category->name }}
                    </label>
                @endforeach
            </fieldset>
        </div>


        <div class="mb-3">
            <label for="summary">Resumen de la noticia</label>
            <input type="text" name="summary" id="summary" class="form-control @error('summary') is-invalid @enderror" @error('summary') aria-invalid="true" aria-errormessage="error-summary" @enderror value="{{ old('summary') }}">
            @error('summary')
                <div class="text-danger" id="error-summary">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cover">Portada</label>
            <input type="file" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror" @error('cover') aria-invalid="true" aria-errormessage="error-cover" @enderror>
            @error('cover')
                <div class="text-danger" id="error-cover">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Descripcion de la imagen</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" @error('description') aria-invalid="true" aria-errormessage="error-description" @enderror value="{{ old('ndescription') }}">
            @error('description')
                <div class="text-danger" id="error-description">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content">Cuerpo de la noticia</label>
            <textarea  name="content" id="content" class="form-control @error('content') is-invalid @enderror" @error('content') aria-invalid="true" aria-errormessage="error-content" @enderror>{{ old('content') }}</textarea>
            @error('content')
                <div class="text-danger" id="error-content">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
    </form>



</x-layouts.admin>

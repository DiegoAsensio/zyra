<x-layouts.admin>

    <x-slot:title>Publicar membresia</x-slot:title>

    <h1>Generar membrecia nueva</h1>

    @if ($errors->any() )
        <div class="alert alert-danger mb-3 ">Hay campos requeridos sin completar.</div>
    @endif

    <form action="{{ route('memberships.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" @error('name') aria-invalid="true" aria-errormessage="error-name" @enderror value="{{ old('name') }}">
            @error('name')
                <div class="text-danger" id="error-name">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category">Categoria</label>
            <input type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror" @error('category') aria-invalid="true" aria-errormessage="error-category" @enderror value="{{ old('category') }}">
            @error('category')
                <div class="text-danger" id="error-category">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price">Precio</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" @error('price') aria-invalid="true" aria-errormessage="error-price" @enderror value="{{ old('price') }}">
            @error('price')
                <div class="text-danger" id="error-price">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="daypass">daypass</label>
            <input type="text" name="daypass" id="daypass" class="form-control @error('daypass') is-invalid @enderror" @error('daypass') aria-invalid="true" aria-errormessage="error-daypass" @enderror value="{{ old('daypass') }}">
            @error('daypass')
                <div class="text-danger" id="error-daypass">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="credits">Creditos</label>
            <input type="text" name="credits" id="credits" class="form-control @error('credits') is-invalid @enderror" @error('credits') aria-invalid="true" aria-errormessage="error-credits" @enderror value="{{ old('credits') }}">
            @error('credits')
                <div class="text-danger" id="error-credits">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Publicar</button>
        <a href="{{ route('memberships.index')}}" class="btn btn-danger">Cancelar</a>

    </form>



</x-layouts.admin>

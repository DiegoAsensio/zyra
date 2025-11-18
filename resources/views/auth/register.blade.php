<x-layouts.main>
    <x-slot:title>Nuevo usuario</x-slot:title>

    <h1>Crear nuevo usuario</h1>


    <form action="{{ route('auth.register.process') }}" method="post">
        @csrf
        <div class="mb-2">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="fomr-control @error('email') is-invalid @enderror" @error('email') aria-invalid="true" aria-errormessage="error-email" @enderror value="{{ old('email') }}">
            @error('email')
                <div class="text-danger" id="error-email">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-2">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" class="fomr-control">
        </div>

        <button type="submit" class="btn btn-primary">Registrarme</button>
        <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>

        </form>


</x-layouts.main>

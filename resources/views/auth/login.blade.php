<x-layouts.main>
    <x-slot:title>Ingresar</x-slot:title>

    <h1>Ingresar</h1>


    <form action="{{ route('auth.login.process') }}" method="post">
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

        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>
    <p>En caso de no tener una cuenta no dudes en registrarte</p>
    <a href="{{ route('auth.register.show') }}" class="btn btn-primary">Registrarme</a>


</x-layouts.main>

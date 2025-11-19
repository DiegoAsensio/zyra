<x-layouts.main>
    <x-slot:title>Crear cuenta</x-slot:title>

    <div class="auth-container">
        <div class="auth-card">
            <div class="text-center mb-4">
                <h1 class="mb-2 fw-bold text-primary">Únete a Zyra Cowork</h1>
                <p class="text-muted">Crea tu cuenta y comienza hoy mismo</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger mb-4">
                    <strong>Por favor revisa los campos del formulario</strong>
                </div>
            @endif

            <form action="{{ route('auth.store') }}" method="post">
                @csrf
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre completo</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name" 
                        class="form-control @error('name') is-invalid @enderror" 
                        @error('name') aria-invalid="true" aria-describedby="error-name" @enderror 
                        value="{{ old('name') }}"
                        placeholder="Juan Pérez"
                    >
                    @error('name')
                        <div class="text-danger mt-2" id="error-name">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        @error('email') aria-invalid="true" aria-describedby="error-email" @enderror 
                        value="{{ old('email') }}"
                        placeholder="tu@email.com"
                    >
                    @error('email')
                        <div class="text-danger mt-2" id="error-email">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        class="form-control @error('password') is-invalid @enderror"
                        placeholder="Mínimo 8 caracteres"
                    >
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    Crear cuenta
                </button>

                <div class="text-center">
                    <p class="text-muted mb-2">¿Ya tienes cuenta?</p>
                    <a href="{{ route('auth.login.show') }}" class="btn btn-outline-secondary w-100">
                        Iniciar sesión
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.main>
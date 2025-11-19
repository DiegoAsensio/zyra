<x-layouts.main>
    <x-slot:title>Ingresar</x-slot:title>

    <div class="auth-container">
        <div class="auth-card">
            <div class="text-center mb-4">
                <h1 class="mb-2 fw-bold">Bienvenido de vuelta</h1>
                <p class="text-muted">Ingresa a tu cuenta de Zyra Cowork</p>
            </div>

            @if(session()->has('feedback.message'))
                <div class="alert alert-danger mb-4">
                    {{ session()->get('feedback.message') }}
                </div>
            @endif

            <form action="{{ route('auth.login.process') }}" method="post">
                @csrf
                
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
                        placeholder="••••••••"
                    >
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-3">
                    Ingresar
                </button>

                <div class="text-center">
                    <p class="text-muted mb-2">¿No tienes una cuenta?</p>
                    <a href="{{ route('auth.register.show') }}" class="btn btn-outline-secondary w-100">
                        Crear cuenta nueva
                    </a>
                </div>
            </form>
        </div>
    </div>
</x-layouts.main>
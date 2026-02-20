<x-layouts.admin>
    <x-slot:title>Panel de control</x-slot:title>

    <div class="dashboard-header">
        <h1 class="fw-bold text-primary section-title">Panel de Control</h1>
        <p class="text-muted mb-0">Bienvenido al sistema de administración de Zyra Cowork</p>
    </div>

    <div class="dashboard-stats">
        <div class="stat-card my-auto">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                    <i class="fas fa-newspaper fa-2x text-primary"></i>
                </div>
                <div>
                    <h2 class="mb-0">Artículos</h2>
                    <p class="text-muted mb-0">Gestiona el blog</p>
                </div>
            </div>
            <a href="{{ route('articles.index') }}" class="btn btn-primary w-100">
                Ver artículos
            </a>
        </div>

        <div class="stat-card my-auto">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-success bg-opacity-10 rounded-3 p-3 me-3">
                    <i class="fas fa-id-card fa-2x text-success"></i>
                </div>
                <div>
                    <h2 class="mb-0">Membresías</h2>
                    <p class="text-muted mb-0">Administra planes</p>
                </div>
            </div>
            <a href="{{ route('memberships.index') }}" class="btn btn-primary w-100">
                Ver membresías
            </a>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Accesos rápidos</h2>
                    <div class="list-group list-group-flush">
                        <a href="{{ route('articles.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-circle me-2 text-primary"></i> Publicar nuevo artículo
                        </a>
                        <a href="{{ route('memberships.create') }}" class="list-group-item list-group-item-action">
                            <i class="fas fa-plus-circle me-2 text-success"></i> Crear nueva membresía
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Información del sistema</h2>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2">
                            <strong>Usuario:</strong> {{ auth()->user()->name ?? 'Administrador' }}
                        </li>
                        <li class="mb-2">
                            <strong>Rol:</strong> <span class="badge bg-primary">{{ auth()->user()->role ?? 'Admin' }}</span>
                        </li>
                        <li class="mb-2">
                            <strong>Última sesión:</strong> {{ now()->format('d/m/Y H:i') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de Servicios Activos - Ancho completo -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-1 fw-bold text-primary">
                                <i class="fas fa-users me-2"></i>Servicios Activos
                            </h2>
                            <p class="text-muted mb-0 small">Usuarios registrados y sus contrataciones</p>
                        </div>
                        <span class="badge bg-primary fs-6">{{ $users->count() }} usuarios</span>
                    </div>
                </div>
                <div class="card-body p-0">
                    @if($users->isEmpty())
                        <div class="text-center py-5">
                            <i class="fas fa-user-slash fa-3x text-muted mb-3"></i>
                            <p class="text-muted">No hay usuarios registrados</p>
                        </div>
                    @else
                        <!-- Vista de tabla para desktop -->
                        <div class="d-none d-md-block table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-primary">ID</th>
                                        <th class="text-primary">Nombre</th>
                                        <th class="text-primary">Email</th>
                                        <th class="text-primary">Membresía</th>
                                        <th class="text-primary">Fecha de registro</th>
                                        <th class="text-primary">Fecha de vencimiento</th>
                                        <th class="text-primary text-end">Precio del plan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="align-middle">
                                                <span class="badge bg-light text-dark">#{{ $user->id }}</span>
                                            </td>
                                            <td class="align-middle fw-semibold">{{ $user->name }}</td>
                                            <td class="align-middle">{{ $user->email }}</td>
                                            <td class="align-middle">
                                                @if($user->membership)
                                                    <span class="badge bg-success">{{ $user->membership->name }}</span>
                                                @else
                                                    <span class="badge bg-secondary">Sin membresía</span>
                                                @endif
                                            </td>
                                            <td class="align-middle">
                                                <small class="text-muted">
                                                    <i class="far fa-calendar me-1"></i>
                                                    {{ $user->created_at ? $user->created_at->format('d/m/Y') : 'N/A' }}
                                                </small>
                                            </td>
                                            <td class="align-middle">
                                                @if($user->membership && $user->created_at)
                                                    @php
                                                        $expirationDate = $user->created_at->copy()->addDays($user->membership->daypass);
                                                        $isExpired = $expirationDate->isPast();
                                                    @endphp
                                                    <small class="{{ $isExpired ? 'text-danger' : 'text-muted' }}">
                                                        <i class="far fa-calendar-times me-1"></i>
                                                        {{ $expirationDate->format('d/m/Y') }}
                                                    </small>
                                                    @if($isExpired)
                                                        <span class="badge bg-danger ms-1">Vencido</span>
                                                    @endif
                                                @else
                                                    <span class="text-muted small">-</span>
                                                @endif
                                            </td>
                                            <td class="align-middle text-end">
                                                @if($user->membership)
                                                    <span class="fw-bold text-success">${{ number_format($user->membership->price, 0, ',', '.') }}</span>
                                                @else
                                                    <span class="text-muted">-</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <!-- Vista de cards para mobile -->
                        <div class="d-md-none p-3">
                            @foreach($users as $user)
                                <div class="card mb-3 border">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-3">
                                            <div>
                                                <h5 class="card-title mb-1 fw-bold">{{ $user->name }}</h5>
                                                <p class="text-muted mb-0 small">
                                                    <i class="fas fa-envelope me-1"></i>{{ $user->email }}
                                                </p>
                                            </div>
                                            <span class="badge bg-light text-dark">#{{ $user->id }}</span>
                                        </div>
                                        
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                                    <span class="text-muted small">
                                                        <i class="fas fa-id-card me-1"></i>Membresía
                                                    </span>
                                                    @if($user->membership)
                                                        <span class="badge bg-success">{{ $user->membership->name }}</span>
                                                    @else
                                                        <span class="badge bg-secondary">Sin membresía</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                                    <span class="text-muted small">
                                                        <i class="far fa-calendar me-1"></i>Fecha de registro
                                                    </span>
                                                    <span class="small">
                                                        {{ $user->created_at ? $user->created_at->format('d/m/Y') : 'N/A' }}
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                                                    <span class="text-muted small">
                                                        <i class="far fa-calendar-times me-1"></i>Fecha de vencimiento
                                                    </span>
                                                    @if($user->membership && $user->created_at)
                                                        @php
                                                            $expirationDate = $user->created_at->copy()->addDays($user->membership->daypass);
                                                            $isExpired = $expirationDate->isPast();
                                                        @endphp
                                                        <span class="small {{ $isExpired ? 'text-danger fw-bold' : '' }}">
                                                            {{ $expirationDate->format('d/m/Y') }}
                                                            @if($isExpired)
                                                                <span class="badge bg-danger ms-1">Vencido</span>
                                                            @endif
                                                        </span>
                                                    @else
                                                        <span class="text-muted small">-</span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="d-flex justify-content-between align-items-center py-2">
                                                    <span class="text-muted small">
                                                        <i class="fas fa-dollar-sign me-1"></i>Precio del plan
                                                    </span>
                                                    @if($user->membership)
                                                        <span class="fw-bold text-success">${{ number_format($user->membership->price, 0, ',', '.') }}</span>
                                                    @else
                                                        <span class="text-muted">-</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>
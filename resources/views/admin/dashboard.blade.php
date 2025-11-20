

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

        <div class="stat-card my-auto">
            <div class="d-flex align-items-center mb-3">
                <div class="bg-info bg-opacity-10 rounded-3 p-3 me-3">
                    <i class="fas fa-chart-line fa-2x text-info"></i>
                </div>
                <div>
                    <h2 class="mb-0">Servicios activos</h2>
                        <table  class="table table-borderless">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-primary">ID</th>
                                    <th class="text-primary">Nombre</th>
                                    <th class="text-primary">Membresía</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>
                                            @if($user->membership)
                                                {{ $user->membership->name }}
                                            @else
                                                Sin membresía
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No hay usuarios</td>
                                    </tr>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

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
</x-layouts.admin>

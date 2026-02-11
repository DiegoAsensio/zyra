<?php
/** @var \Illuminate\Database\Eloquent\Collection $memberships */
?>

<x-layouts.admin>
    <x-slot:title>Dashboard - Membresías</x-slot:title>

    <div class="admin-page-header">
        <div>
            <h1 class="fw-bold text-primary section-title">Gestión de Planes</h1>
            <p class="text-muted mb-0">Administra las membresías disponibles</p>
        </div>
        <a href="{{ route('memberships.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i> Nuevo plan
        </a>
    </div>

    @if($memberships->isEmpty())
        <div class="empty-state">
            <i class="fas fa-id-card"></i>
            <h3>No hay planes creados</h3>
            <p>Comienza creando tu primera membresía</p>
            <a href="{{ route('memberships.create') }}" class="btn btn-primary mt-3">
                <i class="fas fa-plus me-2"></i> Crear primera membresía
            </a>
        </div>
    @else
        <div class="row g-4">
            @foreach ($memberships as $membership)
                <div class="col-lg-4 col-md-6">
                    <div class="admin-membership-card">
                        <div class="admin-card-header">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h2 class="membership-name">{{ $membership->name }}</h2>
                                    <span class="tier-badge">{{ $membership->tier->name }}</span>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-light" type="button" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a class="dropdown-item" href="{{ route('memberships.edit', ['id' => $membership->id]) }}">
                                                <i class="fas fa-edit me-2"></i> Editar
                                            </a>
                                        </li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item text-danger" href="{{ route('memberships.delete', ['id' => $membership->id]) }}">
                                                <i class="fas fa-trash me-2"></i> Eliminar
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="admin-card-price">
                            <span class="price-label">Precio mensual</span>
                            <div class="price-amount">
                                ${{ number_format($membership->price, 0, ',', '.') }}
                            </div>
                        </div>

                        <div class="admin-card-details">
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="fas fa-calendar-alt"></i> Días de acceso
                                </span>
                                <span class="detail-value">{{ $membership->daypass }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="detail-label">
                                    <i class="fas fa-coins"></i> Créditos
                                </span>
                                <span class="detail-value">{{ $membership->credits }}</span>
                            </div>
                        </div>

                        <div class="admin-card-actions">

                            <a href="{{ route('memberships.edit', ['id' => $membership->id]) }}" class="btn btn-outline-secondary btn-sm">
                                <i class="fas fa-edit me-1"></i> Editar
                            </a>
                            <a href="{{ route('memberships.delete', ['id' => $membership->id]) }}" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-trash me-1"></i> Eliminar
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</x-layouts.admin>

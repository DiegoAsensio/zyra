<?php
/** @var \Illuminate\Database\Eloquent\Collection $memberships */
?>

<x-layouts.main>
    <x-slot:title>Membresías</x-slot:title>

    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4 fw-bold text-primary section-title mb-3">Encuentra tu plan ideal</h1>
            <p class="lead text-muted">Elige la membresía que mejor se adapte a tus necesidades</p>
        </div>

        <div class="row g-4">
            @foreach ($memberships as $membership)
                <div class="col-lg-4 col-md-6">
                    <div class="membership-card {{ $loop->iteration === 2 ? 'featured' : '' }}">
                        @if($loop->iteration === 2)
                            <div class="featured-badge">
                                <i class="fas fa-star"></i> Más popular
                            </div>
                        @endif

                        <div class="membership-header">
                            <div class="tier-icon">
                                @switch($membership->tier->name)
                                    @case('Premium')
                                        <i class="fas fa-crown"></i>
                                        @break
                                    @case('Pro')
                                        <i class="fas fa-gem"></i>
                                        @break
                                    @case('Basic')
                                        <i class="fas fa-user"></i>
                                        @break
                                    @default
                                        <i class="fas fa-star"></i>
                                @endswitch
                            </div>
                            <h2 class="membership-name">{{ $membership->name }}</h2>
                            <div class="tier-label">{{ $membership->tier->name }}</div>
                        </div>

                        <div class="membership-price">
                            <span class="currency">$</span>
                            <span class="amount">{{ number_format($membership->price, 0, ',', '.') }}</span>
                            <span class="period">/mes</span>
                        </div>

                        <div class="membership-features">
                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>{{ $membership->daypass }}</strong>
                                    <span>días de acceso</span>
                                </div>
                            </div>

                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <strong>{{ $membership->credits }}</strong>
                                    <span>créditos mensuales</span>
                                </div>
                            </div>

                            <div class="feature-item">
                                <i class="fas fa-check-circle"></i>
                                <div>
                                    <span>{{ $membership->tier->description }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="membership-footer">
                            <a href="#contacto" class="btn btn-membership {{ $loop->iteration === 2 ? 'btn-featured' : '' }}">
                                Elegir plan
                            </a>
                            <p class="text-muted small mt-3 mb-0">Sin compromiso de permanencia</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        @if($memberships->isEmpty())
            <div class="empty-state">
                <i class="fas fa-inbox"></i>
                <h3>No hay planes disponibles</h3>
                <p>Pronto tendremos nuevas membresías disponibles</p>
            </div>
        @endif

        <div class="membership-footer-info mt-5">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="info-card">
                        <i class="fas fa-shield-alt"></i>
                        <h3>Sin ataduras</h3>
                        <p>Cancela cuando quieras, sin penalizaciones</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <i class="fas fa-headset"></i>
                        <h3>Soporte 24/7</h3>
                        <p>Estamos aquí para ayudarte siempre que lo necesites</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info-card">
                        <i class="fas fa-calendar-check"></i>
                        <h3>Prueba gratis</h3>
                        <p>Primer día de cortesía para conocer el espacio</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>

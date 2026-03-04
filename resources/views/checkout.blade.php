<?php
/** @var \App\Models\Membership $membership */
?>

<x-layouts.main>
    <x-slot:title>Finalizar compra</x-slot:title>

    <div class="container my-5">

        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold text-primary section-title mb-3">Finalizar compra</h1>
            <p class="lead text-muted">Estás a un paso de unirte a la comunidad Zyra Cowork</p>
        </div>

        <div class="row g-5 justify-content-center">

            <div class="col-lg-5 col-md-8">
                <div class="membership-card featured h-100">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i> Tu plan seleccionado
                    </div>

                    <div class="membership-header">
                        <div class="tier-icon">
                            @switch($membership->tier->name)
                                @case('Premium')
                                    <i class="fas fa-crown"></i>
                                    @break
                                @case('Platinum')
                                    <i class="fas fa-gem"></i>
                                    @break
                                @case('Basic')
                                    <i class="fas fa-user"></i>
                                    @break
                                @case('Flex')
                                    <i class="fas fa-bolt"></i>
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

                    <div class="mt-4 pt-3 border-top">
                        <a href="{{ route('memberships') }}" class="btn btn-outline-secondary btn-sm w-100">
                            <i class="fas fa-arrow-left me-2"></i>Cambiar plan
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">

                        <h3 class="fw-bold text-primary mb-4">
                            <i class="fas fa-lock me-2"></i>Pago seguro
                        </h3>

                        <div class="p-3 bg-light rounded-3 mb-4">
                            <h4 class="h6 fw-bold text-muted text-uppercase mb-3">Resumen del pedido</h4>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Plan {{ $membership->name }}</span>
                                <span class="fw-semibold">${{ number_format($membership->price, 0, ',', '.') }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Días de acceso</span>
                                <span class="fw-semibold">{{ $membership->daypass }}</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Créditos incluidos</span>
                                <span class="fw-semibold">{{ $membership->credits }}</span>
                            </div>
                            <hr class="my-2">
                            <div class="d-flex justify-content-between">
                                <span class="fw-bold">Total mensual</span>
                                <span class="fw-bold text-primary fs-5">${{ number_format($membership->price, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <div id="mercadopago_payment_button" class="mb-4"></div>

                        <div class="row g-3 text-center mt-2">
                            <div class="col-4">
                                <div class="p-2">
                                    <i class="fas fa-shield-alt fa-lg text-success mb-1 d-block"></i>
                                    <small class="text-muted">Pago seguro</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-2">
                                    <i class="fas fa-undo fa-lg text-info mb-1 d-block"></i>
                                    <small class="text-muted">Sin ataduras</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="p-2">
                                    <i class="fas fa-headset fa-lg text-warning mb-1 d-block"></i>
                                    <small class="text-muted">Soporte 24/7</small>
                                </div>
                            </div>
                        </div>

                        <p class="text-muted small text-center mt-3 mb-0">
                            <i class="fas fa-info-circle me-1"></i>
                            Sin compromiso de permanencia. Cancela cuando quieras.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <script>
        const mp = new MercadoPago('<?= $MPPublicKey; ?>');
        mp.bricks().create('wallet', 'mercadopago_payment_button', {
            initialization: {
                preferenceId: "<?= $preference->id; ?>",
            }
        });
    </script>

</x-layouts.main>
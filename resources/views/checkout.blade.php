<?php
/** @var \App\Models\Membership $membership */
?>

<x-layouts.main>
    <x-slot:title>Finalizar compra</x-slot:title>

    <h1>Adquirir membresia</h1>
    <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                    <div class="membership-card featured">
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
                            <div id="mercadopago_payment_button" >
                            </div>
                            <p class="text-muted small mt-3 mb-0">Sin compromiso de permanencia</p>
                        </div>
                    </div>
                </div>
            </div>


            <script src="https://sdk.mercadopago.com/js/v2"></script>
            <script>
                const mp = new MercadoPago('<?= $MPPublicKey;?>');
                mp.bricks().create('wallet', 'mercadopago_payment_button', {
                    initialization:{
                        preferenceId: "<?= $preference->id; ?>",
                    }
                });
                renderWalletBrick(bricksBuilder);
</script>
</x-layouts.main>

<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Espacios de trabajo colaborativo <?php $__env->endSlot(); ?>

    
    <section class="bg-primary text-white py-5" style="background: linear-gradient(135deg, #2a2185 0%, #4a3fa5 100%);">
        <div class="container">
            <div class="row align-items-center min-vh-75">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1 class="display-3 fw-bold mb-4">Transforma tu forma de trabajar</h1>
                    <p class="lead mb-4">Zyra Cowork es más que un espacio de trabajo. Es una comunidad vibrante donde profesionales independientes, startups y empresas encuentran el ambiente perfecto para crecer, colaborar y prosperar en el corazón de la ciudad.</p>
                    <div class="d-flex gap-3 flex-wrap mb-4">
                        <a href="/membresias" class="btn btn-light btn-lg px-4">Ver Planes y Precios</a>
                        <a href="#contacto" class="btn btn-outline-light btn-lg px-4">Contáctanos</a>
                    </div>
                    <div class="mt-4">
                        <p class="mb-2"><strong>📍 Ubicación céntrica</strong> con acceso a transporte público</p>
                        <p class="mb-2"><strong>🕐 Horario flexible</strong> de 8:00 AM a 10:00 PM</p>
                        <p class="mb-0"><strong>✓ Sin contratos rígidos</strong> - Cancela cuando quieras</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/hero.jpg" alt="Zyra Cowork Space" class="img-fluid rounded-3 shadow-lg" style="object-fit: cover; height: 500px; width: 100%;">
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="display-5 fw-bold text-primary mb-4 text-center">¿Qué es Zyra Cowork?</h2>
                    <p class="lead text-center mb-5">Somos el espacio de trabajo colaborativo líder en la zona, diseñado para impulsar tu productividad y conectarte con una comunidad de profesionales ambiciosos.</p>
                    
                    <div class="row g-4 mb-5">
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold mb-3 text-primary">Nuestra Misión</h3>
                                    <p class="mb-0">Crear un ecosistema donde emprendedores, freelancers y empresas encuentren no solo un escritorio, sino un entorno que fomente la creatividad, la colaboración y el crecimiento profesional. Creemos que los mejores resultados surgen cuando personas talentosas trabajan en espacios inspiradores.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <h3 class="h5 fw-bold mb-3 text-primary">Nuestra Historia</h3>
                                    <p class="mb-0">Fundado en 2020, Zyra Cowork nació de la visión de crear espacios de trabajo que se adapten a las necesidades del profesional moderno. Hoy contamos con más de 500 miembros activos que representan diversas industrias: tecnología, diseño, consultoría, marketing y más.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="display-5 fw-bold text-primary mb-5 text-center">¿Por qué elegir Zyra Cowork?</h2>
            
            <div class="row g-4 mb-4">
                <div class="col-lg-4">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold mb-3">Flexibilidad sin límites</h3>
                            <p class="mb-0">Entendemos que cada profesional tiene necesidades diferentes. Por eso ofrecemos desde pases diarios hasta membresías anuales, sin contratos rígidos. ¿Necesitas escalar tu equipo? Perfecto. ¿Prefieres trabajar algunas veces desde casa? No hay problema. Tú eliges cómo y cuándo usar nuestro espacio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold mb-3">Comunidad que impulsa</h3>
                            <p class="mb-0">No somos solo escritorios y WiFi. Somos una comunidad activa que organiza eventos mensuales de networking, workshops con expertos, charlas inspiradoras y after-office para conocernos mejor. Muchos de nuestros miembros han encontrado socios, clientes y amigos aquí.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold mb-3">Infraestructura profesional</h3>
                            <p class="mb-0">Invertimos constantemente en tecnología y comodidad. Fibra óptica de 500MB simétricos, mobiliario ergonómico, salas de reunión equipadas con pantallas 4K y sistemas de videoconferencia profesional, además de áreas comunes diseñadas por arquitectos especializados en espacios corporativos.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold mb-3">Ubicación estratégica</h3>
                            <p class="mb-0">Estamos ubicados en pleno centro de la ciudad, a 5 minutos caminando de la estación principal de metro y con múltiples líneas de autobús a la puerta. Alrededor encontrarás restaurantes, cafeterías, bancos y todo lo que necesitas. Además, contamos con estacionamiento gratuito para miembros y bicicletero seguro.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 h-100">
                        <div class="card-body p-4">
                            <h3 class="h5 fw-bold mb-3">Equilibrio vida-trabajo</h3>
                            <p class="mb-0">Sabemos que trabajar bien también significa descansar bien. Por eso incluimos una terraza verde para desconectar, zona de juegos con ping-pong y videojuegos, sala de meditación, y hasta una cabina insonorizada para llamadas privadas o grabación de podcasts. Tu bienestar es nuestra prioridad.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="py-5">
        <div class="container">
            <h2 class="display-5 fw-bold text-primary mb-4 text-center">Todo incluido en tu membresía</h2>
            <p class="lead text-center text-muted mb-5">Acceso completo a instalaciones y servicios profesionales sin costos adicionales</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Conectividad Premium</h4>
                            <p class="text-muted mb-2">WiFi de fibra óptica con 500MB de velocidad simétrica, conexión cableada disponible en todas las estaciones de trabajo, y red redundante para garantizar que nunca pierdas conexión en momentos críticos.</p>
                            <small class="text-primary">✓ Incluido en todas las membresías</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Café & Bebidas ilimitadas</h4>
                            <p class="text-muted mb-2">Café de especialidad preparado por baristas, té premium de diferentes variedades, agua purificada fría y caliente, jugos naturales y snacks saludables disponibles durante toda la jornada laboral.</p>
                            <small class="text-primary">✓ Reposición continua</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Salas de Reunión Equipadas</h4>
                            <p class="text-muted mb-2">6 salas con capacidad de 4 a 12 personas, equipadas con pantallas de 55", sistema de videoconferencia Zoom Rooms, pizarras digitales, y reserva online fácil desde tu panel de miembro.</p>
                            <small class="text-primary">✓ 10 horas mensuales incluidas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Centro de Impresión</h4>
                            <p class="text-muted mb-2">Impresoras láser a color y blanco y negro, escáner de alta velocidad, fotocopiadora profesional y servicio de encuadernación. Ideal para presentaciones importantes y documentos corporativos.</p>
                            <small class="text-primary">✓ 200 páginas mensuales incluidas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Seguridad & Acceso</h4>
                            <p class="text-muted mb-2">Acceso controlado 24/7 mediante tarjeta RFID personalizada, cámaras de seguridad en todas las áreas comunes, casilleros con cerradura para tus pertenencias y personal de seguridad en horario extendido.</p>
                            <small class="text-primary">✓ Acceso según tu plan</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Estacionamiento & Movilidad</h4>
                            <p class="text-muted mb-2">Estacionamiento gratuito para autos con espacios asignados para miembros full-time, bicicletero techado con candados incluidos, y estación de carga para vehículos eléctricos en construcción.</p>
                            <small class="text-primary">✓ Según disponibilidad</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Espacios de Bienestar</h4>
                            <p class="text-muted mb-2">Terraza verde con plantas y asientos cómodos, sala de meditación con iluminación ambiental, zona de juegos con ping-pong, futbolito y consola de videojuegos para desconectar entre reuniones.</p>
                            <small class="text-primary">✓ Uso libre</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Cabina de Podcast</h4>
                            <p class="text-muted mb-2">Cabina profesional insonorizada equipada con micrófono de condensador, interfaz de audio, iluminación LED ajustable y software de grabación. Perfecta para podcasters, youtubers o reuniones privadas.</p>
                            <small class="text-primary">✓ Reserva por horas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="h6 fw-bold mb-3">Servicios Adicionales</h4>
                            <p class="text-muted mb-2">Recepción de correspondencia con tu domicilio fiscal, servicio de mensajería, soporte técnico in-house para cualquier problema con tu equipo, y limpieza profesional diaria de todos los espacios.</p>
                            <small class="text-primary">✓ Siempre disponible</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?><?php /**PATH C:\Users\diego\Documents\GitHub\Zyra-Cowork\resources\views/home.blade.php ENDPATH**/ ?>
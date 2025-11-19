<x-layouts.main>
    <x-slot:title>Espacios de trabajo colaborativo</x-slot:title>

    {{-- Hero --}}
    <section class="hero-section py-5">
        <div class="container-fluid px-4 px-lg-5">
            <div class="row align-items-center min-vh-75 mx-auto" style="max-width: 1400px;">
                <div class="col-lg-6 mb-4 mb-lg-0 fade-in-up">
                    <span class="badge bg-light text-primary mb-3 px-3 py-2">
                        <i class="fas fa-star me-1"></i>Más de 400 miembros activos
                    </span>
                    <h1 class="display-3 fw-bold mb-4 home-h1">Zyra Cowork</h1>
                    <h2 class="h4 mb-4">Transforma tu forma de trabajar</h2>
                    <p class="lead mb-4">Zyra Cowork es más que un espacio de trabajo. Es una comunidad vibrante donde profesionales independientes, startups y empresas encuentran el ambiente perfecto para crecer, colaborar y prosperar en el corazón de la ciudad.</p>
                    <div class="d-flex gap-3 flex-wrap mb-4">
                        <a href="{{ route('memberships') }}" class="btn btn-light btn-lg px-4 shadow">
                            <i class="fas fa-rocket me-2"></i>Ver Planes y Precios
                        </a>
                        <a href="#contacto" class="btn btn-outline-light btn-lg px-4">
                            <i class="fas fa-phone me-2"></i>Contáctanos
                        </a>
                    </div>

                    <div class="mt-4 p-4 bg-white bg-opacity-10 rounded-3 backdrop-blur">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt fa-2x text-warning me-3"></i>
                                    <div>
                                        <small class="d-block opacity-75">Ubicación</small>
                                        <strong>Céntrica</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-clock fa-2x text-info me-3"></i>
                                    <div>
                                        <small class="d-block opacity-75">Horario</small>
                                        <strong>8 AM - 10 PM</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-check-circle fa-2x text-success me-3"></i>
                                    <div>
                                        <small class="d-block opacity-75">Contrato</small>
                                        <strong>Sin ataduras</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="position-relative">
                        <div class="hero-image">
                            <img src="assets/images/hero.jpg"
                                 alt="Zyra Cowork Space"
                                 class="img-fluid rounded-4 shadow-lg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Estadisticas --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h3 class="display-5 fw-bold text-primary mb-0">500+</h3>
                            <p class="text-muted mb-0">Miembros Activos</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-building fa-3x text-success mb-3"></i>
                            <h3 class="display-5 fw-bold text-success mb-0">1200m²</h3>
                            <p class="text-muted mb-0">De Espacio</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-door-open fa-3x text-warning mb-3"></i>
                            <h3 class="display-5 fw-bold text-warning mb-0">6</h3>
                            <p class="text-muted mb-0">Salas de Reunión</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <i class="fas fa-star fa-3x text-info mb-3"></i>
                            <h3 class="display-5 fw-bold text-info mb-0">4.9</h3>
                            <p class="text-muted mb-0">Calificación Promedio</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Sobre Zyra --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary section-title">¿Qué es Zyra Cowork?</h2>
                <p class="lead text-muted">Somos el espacio de trabajo colaborativo líder en la zona</p>
            </div>

            <div class="row g-4 align-items-center mb-5">
                <div class="col-lg-6">
                    <img src="assets/images/2.jpg"
                         alt="Espacio de Coworking"
                         class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h3 class="h2 fw-bold mb-4">Nuestra Misión</h3>
                    <p class="lead mb-4">Crear un ecosistema donde emprendedores, freelancers y empresas encuentren no solo un escritorio, sino un entorno que fomente la creatividad, la colaboración y el crecimiento profesional.</p>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Espacios inspiradores</strong> diseñados para la productividad
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Comunidad diversa</strong> de profesionales talentosos
                        </li>
                        <li class="mb-3">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            <strong>Tecnología de punta</strong> para tu trabajo diario
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row g-4 align-items-center flex-lg-row-reverse">
                <div class="col-lg-6">
                    <img src="assets/images/3.jpg"
                         alt="Equipo Trabajando"
                         class="img-fluid rounded-4 shadow-lg">
                </div>
                <div class="col-lg-6">
                    <h3 class="h2 fw-bold mb-4">Nuestra Historia</h3>
                    <p class="lead mb-4">Fundado en 2020, Zyra Cowork nació de la visión de crear espacios de trabajo que se adapten a las necesidades del profesional moderno.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3">
                                <h4 class="h5 mb-2"><i class="fas fa-rocket text-primary me-2"></i>2020</h4>
                                <p class="mb-0 small">Fundación de Zyra Cowork</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 bg-light rounded-3">
                                <h4 class="h5 mb-2"><i class="fas fa-users text-success me-2"></i>500+</h4>
                                <p class="mb-0 small">Miembros en 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Por qué elegir Zyra --}}
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="display-5 fw-bold text-primary section-title">¿Por qué elegir Zyra Cowork?</h2>
                <p class="lead text-muted">Beneficios que marcan la diferencia</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary bg-opacity-10 rounded-3 p-3">
                                    <i class="fas fa-sync-alt fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Flexibilidad sin límites</h3>
                            <p class="text-muted mb-0">Desde pases diarios hasta membresías anuales, sin contratos rígidos. Escala tu espacio según tus necesidades.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success bg-opacity-10 rounded-3 p-3">
                                    <i class="fas fa-user-friends fa-2x text-success"></i>
                                </div>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Comunidad que impulsa</h3>
                            <p class="text-muted mb-0">Eventos mensuales de networking, workshops y after-office. Conecta con socios, clientes y amigos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-info bg-opacity-10 rounded-3 p-3">
                                    <i class="fas fa-laptop-code fa-2x text-info"></i>
                                </div>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Infraestructura profesional</h3>
                            <p class="text-muted mb-0">Fibra óptica 500MB, mobiliario ergonómico, salas con pantallas 4K y áreas diseñadas por expertos.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-warning bg-opacity-10 rounded-3 p-3">
                                    <i class="fas fa-map-marked-alt fa-2x text-warning"></i>
                                </div>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Ubicación estratégica</h3>
                            <p class="text-muted mb-0">Centro de la ciudad, 5 minutos del metro, estacionamiento gratuito y bicicletero seguro.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-danger bg-opacity-10 rounded-3 p-3">
                                    <i class="fas fa-heart fa-2x text-danger"></i>
                                </div>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Equilibrio vida-trabajo</h3>
                            <p class="text-muted mb-0">Terraza verde, zona de juegos, sala de meditación y cabina para podcasts. Tu bienestar es prioridad.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-purple bg-opacity-10 rounded-3 p-3">
                                    <i class="fas fa-shield-alt fa-2x text-primary"></i>
                                </div>
                            </div>
                            <h3 class="h5 fw-bold mb-3">Seguridad garantizada</h3>
                            <p class="text-muted mb-0">Acceso controlado 24/7, cámaras de seguridad, casilleros personales y personal de vigilancia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Amenities --}}
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
            <h2 class="display-5 fw-bold text-primary section-title">Todo incluido en tu membresía</h2>
            <p class="lead text-center text-muted mb-5">Acceso completo a instalaciones y servicios profesionales sin costos adicionales</p>
        </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Conectividad Premium</h3>
                            <p class="text-muted mb-2">WiFi de fibra óptica con 500MB de velocidad simétrica, conexión cableada disponible en todas las estaciones de trabajo, y red redundante para garantizar que nunca pierdas conexión en momentos críticos.</p>
                            <small class="text-info">✓ Incluido en todas las membresías</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Café & Bebidas ilimitadas</h3>
                            <p class="text-muted mb-2">Café de especialidad preparado por baristas, té premium de diferentes variedades, agua purificada fría y caliente, jugos naturales y snacks saludables disponibles durante toda la jornada laboral.</p>
                            <small class="text-info">✓ Reposición continua</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Salas de Reunión Equipadas</h3>
                            <p class="text-muted mb-2">6 salas con capacidad de 4 a 12 personas, equipadas con pantallas de 55", sistema de videoconferencia Zoom Rooms, pizarras digitales, y reserva online fácil desde tu panel de miembro.</p>
                            <small class="text-info">✓ 10 horas mensuales incluidas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Centro de Impresión</h3>
                            <p class="text-muted mb-2">Impresoras láser a color y blanco y negro, escáner de alta velocidad, fotocopiadora profesional y servicio de encuadernación. Ideal para presentaciones importantes y documentos corporativos.</p>
                            <small class="text-info">✓ 200 páginas mensuales incluidas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Seguridad & Acceso</h3>
                            <p class="text-muted mb-2">Acceso controlado 24/7 mediante tarjeta RFID personalizada, cámaras de seguridad en todas las áreas comunes, casilleros con cerradura para tus pertenencias y personal de seguridad en horario extendido.</p>
                            <small class="text-info">✓ Acceso según tu plan</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Estacionamiento & Movilidad</h3>
                            <p class="text-muted mb-2">Estacionamiento gratuito para autos con espacios asignados para miembros full-time, bicicletero techado con candados incluidos, y estación de carga para vehículos eléctricos en construcción.</p>
                            <small class="text-info">✓ Según disponibilidad</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Espacios de Bienestar</h3>
                            <p class="text-muted mb-2">Terraza verde con plantas y asientos cómodos, sala de meditación con iluminación ambiental, zona de juegos con ping-pong, futbolito y consola de videojuegos para desconectar entre reuniones.</p>
                            <small class="text-info">✓ Uso libre</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Cabina de Podcast</h3>
                            <p class="text-muted mb-2">Cabina profesional insonorizada equipada con micrófono de condensador, interfaz de audio, iluminación LED ajustable y software de grabación. Perfecta para podcasters, youtubers o reuniones privadas.</p>
                            <small class="text-info">✓ Reserva por horas</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h3 class="h6 fw-bold mb-3 text-primary">Servicios Adicionales</h3>
                            <p class="text-muted mb-2">Recepción de correspondencia con tu domicilio fiscal, servicio de mensajería, soporte técnico in-house para cualquier problema con tu equipo, y limpieza profesional diaria de todos los espacios.</p>
                            <small class="text-info">✓ Siempre disponible</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="py-5 bg-white text-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 text-center text-lg-start mb-4 mb-lg-0">
                    <h2 class="display-6 fw-bold mb-3">¿Listo para unirte a nuestra comunidad?</h2>
                    <p class="lead mb-0">Más de 500 profesionales ya confían en Zyra Cowork para impulsar su crecimiento</p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <a href="{{ route('memberships') }}" class="btn btn-primary btn-lg px-5 shadow-lg">
                        <i class="fas fa-rocket me-2"></i>Ver Planes
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>

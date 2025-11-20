<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('../css/app.css') }}"
    link rel="stylesheet" href="{{ url('css/animations.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Zyra-Cowork || {{ $title ?? "" }}</title>
</head>
<body class="p-4">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= route('home')?>">Zyra-Cowork</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">


        <li class="nav-item">
          <x-nav-link route="home">Inicio</x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link route="articles">Nuestro Blog</x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link route="memberships">Membresias</x-nav-link>
        </li>

        @auth

        <li class="nav-item">
          <form action="{{ route('auth.logout') }}" method="post">
            @csrf
            <button type="submit" class="nav-link">Cerrar sesion</button>
          </form>
        </li>

        @else

        <li class="nav-item">
            <x-nav-link route="auth.login.show">Ingresar</x-nav-link>
        </li>

        @endauth


      </ul>
    </div>
  </div>
</nav>
<main class="p-2">

    @if (session()->has('feedback.message'))
    <div class="alert alert-{{ session()->get('feedback.type', 'success') }} alert-dismissible fade show" role="alert">
        <strong>{!! session()->get('feedback.message') !!}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{ $slot }}

</main>

<footer id="contacto" class="pt-5 pb-4 footer">
    <div class="container">
        <div class="row g-4 mb-4">
            <div class="col-lg-4 col-md-6">
                <h2 class="h4 fw-bold mb-4 text-white">Zyra Cowork</h2>
                <p class="mb-4 text-white-50">Tu espacio de trabajo colaborativo en el corazón de la ciudad. Donde la productividad se encuentra con la comunidad.</p>
            </div>


            <div class="col-lg-4 col-md-6">
                <h3 class="h5 fw-bold mb-4 text-white">Contacto</h3>
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <span class="text-white-50">Jorge Luis Borges 1958<br>Palermo, Buenos Aires</span>
                    </li>
                    <li class="mb-3">
                        <a href="tel:+541145678900" class="text-white-50 text-decoration-none">+54 11 4567-8900</a>
                    </li>
                    <li class="mb-3">
                        <a href="https://wa.me/541145678900" class="text-white-50 text-decoration-none" target="_blank">+54 11 4923-4812</a>
                    </li>
                    <li class="mb-3">
                        <a href="mailto:hola@zyracowork.com" class="text-white-50 text-decoration-none">hola@zyracowork.com</a>
                    </li>
                </ul>
            </div>


            <div class="col-lg-4 col-md-6">
                <h3 class="h5 fw-bold mb-4 text-white">Horarios de Atención</h3>
                <ul class="list-unstyled text-white-50 mb-4">
                    <li class="mb-2"><strong class="text-white">Lunes a Viernes:</strong> 8:00 AM - 10:00 PM</li>
                    <li class="mb-2"><strong class="text-white">Sábados:</strong> 9:00 AM - 6:00 PM</li>
                    <li class="mb-2"><strong class="text-white">Domingos:</strong> Cerrado</li>
                    <li class="mb-3 mt-3">
                        <small>Acceso 24/7 para miembros con tarjeta</small>
                    </li>
                </ul>

                <h3 class="h6 fw-bold mb-3 text-white">Enlaces Rápidos</h3>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="/membresias" class="text-white-50 text-decoration-none">→ Membresias</a>
                    </li>
                    <li class="mb-2">
                        <a href="/novedades" class="text-white-50 text-decoration-none">→ Nuestro Blog</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-12">
                <div class="ratio ratio-21x9 rounded-3 overflow-hidden" style="max-height: 300px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.0168878457383!2d-58.38375908477026!3d-34.60373098045875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccacf7e1cf2f1%3A0x4c4c4c4c4c4c4c4c!2sBuenos%20Aires!5e0!3m2!1ses!2sar!4v1234567890123"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

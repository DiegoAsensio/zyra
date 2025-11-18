<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('../css/app.css') }}"
    link rel="stylesheet" href="{{ url('css/animations.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Zyra-Cowork || {{ $title ?? "" }}</title>
</head>
<body class="p-4">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= route('dashboard')?>">Zyra-Cowork</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">


        <li class="nav-item">
          <x-nav-link route="dashboard">Dashboard</x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link route="articles.index">Control de Blog</x-nav-link>
        </li>
        <li class="nav-item">
          <x-nav-link route="memberships.index">Control de Membresias</x-nav-link>
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
<main class="container p-2">

    @if (session()->has('feedback.message'))
    <div class="alert alert-{{ session()->get('feedback.type', 'success') }} alert-dismissible fade show" role="alert">
        <strong>{!! session()->get('feedback.message') !!}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    {{ $slot }}
</main>

<footer id="contacto" class="pt-5 pb-4 footer">

    <p>Panel de control de Zyra Cowork</p>

</footer>
<script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

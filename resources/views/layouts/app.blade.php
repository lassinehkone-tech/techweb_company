<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tech Web Company')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #23272f;">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4" href="{{ route('home') }}">
                <i class="fa-solid fa-code me-2"></i>Tech Web Company
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-medium">
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('services') ? 'active' : '' }}"
                            href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 {{ request()->routeIs('portfolio') ? 'active' : '' }}"
                            href="{{ route('portfolio') }}">Portfolio</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-dark text-white fw-bold px-4 rounded-pill"
                            href="{{ route('contact.create') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="content-wrapper">
        @if (session('success'))
            <div class="container messages-container">
                <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @if ($errors->any())
            <div class="container messages-container">
                <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
                    Une erreur est survenue lors de l'envoi de votre message.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif

        @yield('content')
        <div class="container">

            <!-- HERO -->
            <div class="hero">
                <h1>Tech Web Company</h1>
                <p>Nous transformons vos idées en applications web modernes et performantes.</p>
                <a href="{{ route('contact.create') }}" class="btn btn-light text-dark fw-bold">
                    Demander un devis
                </a>
            </div>

            <!-- SERVICES -->
            <div class="row mt-5 g-4">

                <div class="col-md-4">
                    <div class="card-modern text-center">
                        <i class="fa-solid fa-laptop-code fa-2x mb-3 text-primary"></i>
                        <h5 class="fw-bold">Développement Web</h5>
                        <p>Sites vitrines et e-commerce modernes et rapides.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-modern text-center">
                        <i class="fa-solid fa-gears fa-2x mb-3 text-primary"></i>
                        <h5 class="fw-bold">Applications Web</h5>
                        <p>Solutions sur mesure avec les dernières technologies.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-modern text-center">
                        <i class="fa-solid fa-cloud fa-2x mb-3 text-primary"></i>
                        <h5 class="fw-bold">SaaS</h5>
                        <p>Applications SaaS sécurisées et évolutives.</p>
                    </div>
                </div>

            </div>

        </div>
    </main>

    <footer class="bg-dark text-white py-5 mt-auto">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-lg-4 text-center text-md-start">
                    <h5 class="fw-bold mb-3"><i class="fa-solid fa-code text-primary me-2"></i>Tech Web Company</h5>
                    <p class="text-secondary">Nous transformons vos idées en applications web modernes, performantes et
                        évolutives.</p>
                </div>
                <div class="col-md-6 col-lg-4 text-center">
                    <h5 class="fw-bold mb-3">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}"
                                class="text-secondary text-decoration-none footer-link">Accueil</a></li>
                        <li><a href="{{ route('services') }}"
                                class="text-secondary text-decoration-none footer-link">Services</a></li>
                        <li><a href="{{ route('portfolio') }}"
                                class="text-secondary text-decoration-none footer-link">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4 text-center text-lg-end">
                    <h5 class="fw-bold mb-3">Contact</h5>
                    <p class="text-secondary mb-1"><i class="fa-solid fa-envelope me-2"></i>lassinehkone@gmail.com</p>
                    <p class="text-secondary"><i class="fa-solid fa-phone me-2"></i>+223 74 71 39 86</p>
                    <p class="text-secondary"><i class="fa-solid fa-location-dot me-2"></i>Bamako, Mali</p>
                </div>
            </div>
            <hr class="mt-4 mb-3 border-secondary">
            <div class="text-center text-secondary small">
                <p class="mb-0">&copy; {{ now()->year }} Tech Web Company. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
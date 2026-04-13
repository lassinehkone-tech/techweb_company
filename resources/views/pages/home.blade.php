@extends('layouts.app')

@section('title', 'Accueil - Tech Web Company')

@section('content')
    <section class="hero text-white text-center d-flex align-items-center position-relative"
        style="min-height: 80vh; background: #23272f;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <span class="badge bg-light text-dark mb-3 px-3 py-2 rounded-pill shadow-sm animate-fade-in-up">Basé au
                        Mali</span>
                    <h1 class="display-3 fw-bolder mb-4 animate-fade-in-up delay-1">Tech Web Company</h1>
                    <p class="lead fs-3 mb-5 mx-auto animate-fade-in-up delay-2" style="max-width: 800px;">« Nous
                        transformons vos idées en application et site web »</p>
                    <div class="animate-fade-in-up delay-3">
                        <a href="{{ route('services') }}"
                            class="btn btn-light btn-lg px-5 py-3 rounded-pill shadow me-md-3 mb-3 mb-md-0 fw-bold hover-lift-btn">
                            Voir nos services <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                        <a href="{{ route('contact.create') }}"
                            class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill border-2 hover-lift-btn">
                            Nous contacter
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path
                    d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                    fill="#f8f9fa"></path>
            </svg>
        </div>
    </section>

    <section class="py-5 bg-light pb-5">
        <div class="container py-5 mt-4">
            <div class="text-center mb-5">
                <h6 class="text-dark fw-bold text-uppercase tracking-wide">Au delà du code</h6>
                <h2 class="display-5 fw-bold mb-3">Pourquoi nous choisir ?</h2>
                <div class="mx-auto bg-dark rounded section-bar"></div>
            </div>

            <div class="row g-4 mt-2">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift p-4 text-center">
                        <div class="card-body">
                            <div
                                class="icon-box bg-dark text-white mx-auto mb-4 rounded-circle d-flex align-items-center justify-content-center icon-lg">
                                <i class="fa-solid fa-rocket fa-2x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Performance & Modernité</h4>
                            <p class="text-muted mb-0">Nous combinons les technologies les plus modernes pour garantir des
                                performances optimales.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift p-4 text-center">
                        <div class="card-body">
                            <div
                                class="icon-box bg-primary-soft text-primary mx-auto mb-4 rounded-circle d-flex align-items-center justify-content-center icon-lg">
                                <i class="fa-solid fa-mobile-screen fa-2x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Design Responsive</h4>
                            <p class="text-muted mb-0">Tous nos sites s'adaptent parfaitement aux ordinateurs, tablettes et
                                smartphones avec une UX fluide.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift p-4 text-center">
                        <div class="card-body">
                            <div
                                class="icon-box bg-primary-soft text-primary mx-auto mb-4 rounded-circle d-flex align-items-center justify-content-center icon-lg">
                                <i class="fa-solid fa-handshake-angle fa-2x"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Accompagnement</h4>
                            <p class="text-muted mb-0">Nous sommes des partenaires qui s'engagent dans le succès de votre
                                projet web.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container py-4">
            <div class="row align-items-center justify-content-between p-5 bg-dark rounded-4 shadow-lg text-white">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h3 class="fw-bold mb-2">Prêt à démarrer votre projet ?</h3>
                    <p class="mb-0 fs-5 text-light">Contactez-nous aujourd'hui pour une consultation gratuite et
                        transformons votre idée en réalité.</p>
                </div>
                <div class="col-lg-auto text-lg-end">
                    <a href="{{ route('contact.create') }}"
                        class="btn btn-light text-primary btn-lg rounded-pill px-4 fw-bold shadow-sm hover-lift-btn">Discutons
                        de votre projet</a>
                </div>
            </div>
        </div>
    </section>
@endsection
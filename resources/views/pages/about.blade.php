@extends('layouts.app')

@section('title', 'À propos - Tech Web Company')

@section('content')
    <div class="bg-dark text-white page-header py-5 mb-5 shadow-sm">
        <div class="container py-4 text-center">
            <h1 class="display-4 fw-bold">À propos de nous</h1>
            <p class="lead mt-2">Découvrez qui nous sommes et notre vision de la technologie.</p>
        </div>
    </div>

    <div class="container py-5 mb-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 animate-fade-in-up">
                <div class="pe-lg-5">
                    <h6 class="text-dark fw-bold text-uppercase tracking-wide mb-2">Notre Histoire</h6>
                    <h2 class="display-6 fw-bold mb-4">La technologie au service de <span
                            class="text-dark">l'innovation</span></h2>
                    <p class="text-muted fs-5 mb-4">Tech Web Company a été fondée avec une mission simple : aider les
                        entreprises à prospérer dans le monde numérique. Basés au Mali, nous combinons expertise locale et
                        standards internationaux.</p>
                    <p class="text-muted mb-4">Nous croyons fermement que la technologie doit être un levier de croissance,
                        pas une contrainte. C'est pourquoi nous créons des outils intuitifs, performants et taillés sur
                        mesure.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-dark text-white me-3 flex-shrink-0 icon-sm">
                                    <i class="fa-solid fa-bullseye fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Mission</h5>
                                    <p class="text-muted small mb-0">Transformer vos idées complexes en plateformes
                                        numériques simples.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="icon-circle bg-primary-soft text-primary me-3 flex-shrink-0 icon-sm">
                                    <i class="fa-solid fa-eye fa-lg"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0">Vision</h5>
                                    <p class="text-muted small mb-0">Devenir le leader du développement web sur mesure en
                                        Afrique.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 animate-fade-in-up delay-1">
                <div class="position-relative">
                    <div class="rounded-4 overflow-hidden shadow-lg about-placeholder">
                        <div
                            class="w-100 h-100 d-flex flex-column align-items-center justify-content-center bg-light text-muted">
                            <i class="fa-solid fa-code fa-5x mb-3 text-primary opacity-50"></i>
                            <h5>Équipe Tech Web Company</h5>
                        </div>
                    </div>
                    <div
                        class="position-absolute bottom-0 start-0 translate-middle-x bg-white p-4 rounded-4 shadow-lg text-center about-floating-card">
                        <h3 class="display-5 fw-bold text-primary mb-0">100%</h3>
                        <p class="fw-bold text-muted mb-0">Engagement Client</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-5">
            <div class="col-12 text-center mb-5">
                <h6 class="text-primary fw-bold text-uppercase tracking-wide">Notre Expertise</h6>
                <h2 class="display-6 fw-bold">Notre Stack Technologique</h2>
                <div class="mx-auto bg-dark rounded mt-3 section-bar"></div>
            </div>

            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-center gap-4">
                    <div
                        class="tech-badge bg-white shadow-sm border rounded-pill px-4 py-3 fw-bold d-flex align-items-center hover-lift">
                        <i class="fa-brands fa-laravel text-danger fa-xl me-2"></i> PHP / Laravel
                    </div>
                    <div
                        class="tech-badge bg-white shadow-sm border rounded-pill px-4 py-3 fw-bold d-flex align-items-center hover-lift">
                        <i class="fa-brands fa-js text-warning fa-xl me-2"></i> JavaScript
                    </div>
                    <div
                        class="tech-badge bg-white shadow-sm border rounded-pill px-4 py-3 fw-bold d-flex align-items-center hover-lift">
                        <i class="fa-brands fa-bootstrap fa-xl me-2 bootstrap-purple"></i> Bootstrap 5
                    </div>
                    <div
                        class="tech-badge bg-white shadow-sm border rounded-pill px-4 py-3 fw-bold d-flex align-items-center hover-lift">
                        <i class="fa-brands fa-html5 text-danger fa-xl me-2"></i> HTML5 & CSS3
                    </div>
                    <div
                        class="tech-badge bg-white shadow-sm border rounded-pill px-4 py-3 fw-bold d-flex align-items-center hover-lift">
                        <i class="fa-solid fa-database text-secondary fa-xl me-2"></i> SQL Databases
                    </div>
                    <div
                        class="tech-badge bg-white shadow-sm border rounded-pill px-4 py-3 fw-bold d-flex align-items-center hover-lift">
                        <i class="fa-brands fa-github text-dark fa-xl me-2"></i> Git / GitHub
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
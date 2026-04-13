@extends('layouts.app')

@section('title', 'Contact - Tech Web Company')

@section('content')
    <div class="bg-dark text-white page-header py-5 mb-5 shadow-sm">
        <div class="container py-4 text-center">
            <h1 class="display-4 fw-bold">Contactez-nous</h1>
            <p class="lead mt-2">Nous sommes là pour répondre à vos questions et discuter de vos projets.</p>
        </div>
    </div>

    <div class="container py-5 mb-5">
        <div class="row g-5">
            <div class="col-lg-5 animate-fade-in-up">
                <h6 class="text-dark fw-bold text-uppercase tracking-wide mb-2">Restez connecté</h6>
                <h2 class="display-6 fw-bold mb-4">Lançons votre projet<br><span class="text-dark">ensemble</span></h2>
                <p class="text-muted fs-5 mb-5">Prêt à transformer vos idées en réalité ? N'hésitez pas à nous contacter.
                    Notre équipe vous répondra dans les plus brefs délais.</p>

                <div class="d-flex mb-4 p-4 bg-white rounded-4 shadow-sm border border-light hover-lift">
                    <div class="icon-circle bg-dark text-white me-4 flex-shrink-0 icon-md">
                        <i class="fa-solid fa-phone fa-xl"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Téléphone</h5>
                        <p class="text-muted mb-0 fs-5">+223 74 71 39 86</p>
                    </div>
                </div>

                <div class="d-flex mb-4 p-4 bg-white rounded-4 shadow-sm border border-light hover-lift">
                    <div class="icon-circle bg-primary-soft text-primary me-4 flex-shrink-0 icon-md">
                        <i class="fa-solid fa-envelope fa-xl"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Email</h5>
                        <p class="text-muted mb-0 fs-5">lassinehkone@gmail.com</p>
                    </div>
                </div>

                <div class="d-flex mb-4 p-4 bg-white rounded-4 shadow-sm border border-light hover-lift">
                    <div class="icon-circle bg-primary-soft text-primary me-4 flex-shrink-0 icon-md">
                        <i class="fa-solid fa-location-dot fa-xl"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Notre bureau</h5>
                        <p class="text-muted mb-0 fs-5">Bamako, Mali</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 animate-fade-in-up delay-1">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">
                    <div class="bg-dark p-4 p-md-5 text-white">
                        <h3 class="fw-bold mb-0 text-white">Envoyez-nous un message</h3>
                    </div>
                    <div class="card-body p-4 p-md-5 bg-white">
                        <form method="post" action="{{ route('contact.store') }}" class="needs-validation">
                            @csrf

                            <div class="mb-4">
                                <label for="nom" class="form-label fw-bold text-dark">Votre Nom Complet <span
                                        class="text-danger">*</span></label>
                                <input id="nom" type="text" name="nom" value="{{ old('nom') }}"
                                    class="form-control @error('nom') is-invalid @enderror" placeholder="Votre nom"
                                    required>
                                @error('nom')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email" class="form-label fw-bold text-dark">Votre Adresse Email <span
                                        class="text-danger">*</span></label>
                                <input id="email" type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Votre email"
                                    required>
                                @error('email')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="message" class="form-label fw-bold text-dark">Votre Message <span
                                        class="text-danger">*</span></label>
                                <textarea id="message" name="message" rows="5"
                                    class="form-control @error('message') is-invalid @enderror" placeholder="Votre message"
                                    required>{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="d-grid mt-5">
                                <button type="submit"
                                    class="btn btn-primary btn-lg rounded-pill py-3 fw-bold shadow-sm hover-lift-btn">
                                    <i class="fa-solid fa-paper-plane me-2"></i> Envoyer le message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
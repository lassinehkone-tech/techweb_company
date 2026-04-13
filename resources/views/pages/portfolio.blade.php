@extends('layouts.app')

@section('title', 'Portfolio - Tech Web Company')

@section('content')
<div class="bg-dark text-white page-header py-5 mb-5 shadow-sm">
    <div class="container py-4 text-center">
        <h1 class="display-4 fw-bold">Notre Portfolio</h1>
        <p class="lead mt-2">Découvrez nos réalisations et les projets qui nous rendent fiers.</p>
    </div>
</div>

<div class="container py-5 mb-5">
    @if ($projets->isNotEmpty())
        <div class="row g-5">
            @foreach ($projets as $projet)
                <div class="col-md-6 col-lg-4 animate-fade-in-up" style="animation-delay: {{ ($loop->index + 1) * 100 }}ms;">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift group">
                        <div class="position-relative overflow-hidden bg-light portfolio-image">
                            @if ($projet->image_url)
                                <img src="{{ $projet->image_url }}" class="card-img-top w-100 h-100 portfolio-cover" alt="{{ $projet->titre }}">
                            @else
                                <div class="w-100 h-100 d-flex align-items-center justify-content-center text-muted portfolio-placeholder">
                                    <i class="fa-solid fa-image fa-3x mb-2 opacity-25"></i>
                                </div>
                            @endif

                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge bg-dark px-3 py-2 rounded-pill shadow-sm">{{ $projet->technologie }}</span>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <h4 class="card-title fw-bold mb-3">{{ $projet->titre }}</h4>
                            <p class="card-text text-muted mb-0">{{ \Illuminate\Support\Str::limit($projet->description, 130) }}</p>
                        </div>
                        <div class="card-footer bg-white border-0 p-4 pt-0">
                            <a href="{{ route('contact.create') }}" class="btn btn-outline-primary rounded-pill fw-bold w-100 hover-lift-btn">En savoir plus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center py-5">
            <div class="icon-circle bg-light text-muted mx-auto mb-4 rounded-circle shadow-sm portfolio-empty-icon">
                <i class="fa-solid fa-folder-open fa-3x"></i>
            </div>
            <h3 class="fw-bold text-muted mb-3">Notre portfolio est en cours de mise à jour</h3>
            <p class="text-secondary mb-4">Revenez bientôt pour découvrir nos dernières réalisations.</p>
            <a href="{{ route('contact.create') }}" class="btn btn-primary btn-lg rounded-pill px-4 shadow-sm fw-bold hover-lift-btn">Confiez-nous votre projet</a>
        </div>
    @endif
</div>
@endsection

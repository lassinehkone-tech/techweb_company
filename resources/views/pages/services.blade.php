@extends('layouts.app')

@section('title', 'Nos Services - Tech Web Company')

@section('content')
    <div class="bg-dark text-white page-header py-5 mb-5 shadow-sm">
        <div class="container py-4 text-center">
            <h1 class="display-4 fw-bold">Nos Services</h1>
            <p class="lead mt-2">Expertise technologique complète pour votre business.</p>
        </div>
    </div>

    <div class="container py-5 mb-5">
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift card-service">
                    <div class="bg-dark pt-3 service-topbar"></div>
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div
                                class="icon-wrap bg-dark text-white rounded-circle d-flex align-items-center justify-content-center shadow icon-md">
                                <i class="fa-solid fa-laptop-code fa-xl"></i>
                            </div>
                            <h3 class="card-title fw-bold mb-0 ms-3">Développement Web</h3>
                        </div>
                        <p class="card-text text-muted mb-4">Nous concevons des sites internet modernes, rapides et
                            optimisés pour le référencement.</p>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Sites vitrines
                                institutionnels</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Sites e-commerce</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Optimisation SEO intégrée
                            </li>
                            <li><i class="fa-solid fa-check text-white me-2"></i> Design 100% responsif</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift card-service">
                    <div class="bg-dark pt-3 service-topbar"></div>
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div
                                class="icon-wrap bg-dark text-white rounded-circle d-flex align-items-center justify-content-center shadow icon-md">
                                <i class="fa-solid fa-cubes fa-xl"></i>
                            </div>
                            <h3 class="card-title fw-bold mb-0 ms-3">Applications Web</h3>
                        </div>
                        <p class="card-text text-muted mb-4">Développement sur mesure d'outils métiers complexes accessibles
                            via navigateur avec un backend robuste.</p>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Outils de gestion interne
                            </li>
                            <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Tableaux de bord & Analytics
                            </li>
                            <li class="mb-2"><i class="fa-solid fa-check text-white me-2"></i> Intégration d'API tierces
                            </li>
                            <li><i class="fa-solid fa-check text-white me-2"></i> Bases de données relationnelles</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift card-service">
                    <div class="bg-success pt-3 service-topbar"></div>
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div
                                class="icon-wrap bg-success text-white rounded-circle d-flex align-items-center justify-content-center shadow icon-md">
                                <i class="fa-solid fa-cloud fa-xl"></i>
                            </div>
                            <h3 class="card-title fw-bold mb-0 ms-3">Développement SaaS</h3>
                        </div>
                        <p class="card-text text-muted mb-4">Transformez votre concept en véritable produit SaaS prêt à
                            accueillir des utilisateurs et générer des revenus récurrents.</p>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Architecture multi-tenant
                            </li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Gestion des abonnements
                            </li>
                            <li class="mb-2"><i class="fa-solid fa-check text-success me-2"></i> Espace client sécurisé</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> Haute évolutivité</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift card-service">
                    <div class="bg-warning pt-3 service-topbar"></div>
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div
                                class="icon-wrap bg-warning text-white rounded-circle d-flex align-items-center justify-content-center shadow icon-md">
                                <i class="fa-solid fa-screwdriver-wrench fa-xl"></i>
                            </div>
                            <h3 class="card-title fw-bold mb-0 ms-3">Maintenance</h3>
                        </div>
                        <p class="card-text text-muted mb-4">Garantissez la disponibilité de votre site avec nos forfaits de
                            maintenance, mises à jour et support technique réactif.</p>
                        <ul class="list-unstyled text-secondary mb-0">
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Mises à jour de sécurité
                            </li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Sauvegardes régulières</li>
                            <li class="mb-2"><i class="fa-solid fa-check text-warning me-2"></i> Correction de bugs</li>
                            <li><i class="fa-solid fa-check text-warning me-2"></i> Évolutions fonctionnelles</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
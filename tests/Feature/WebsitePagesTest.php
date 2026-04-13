<?php

namespace Tests\Feature;

use App\Models\Projet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WebsitePagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_main_pages_load_successfully(): void
    {
        foreach (['/', '/services', '/about', '/portfolio', '/contact'] as $uri) {
            $this->get($uri)->assertOk();
        }
    }

    public function test_portfolio_page_displays_projects(): void
    {
        Projet::create([
            'titre' => 'Plateforme RH',
            'description' => 'Une application interne pour la gestion des employés.',
            'technologie' => 'Laravel',
        ]);

        $this->get('/portfolio')
            ->assertOk()
            ->assertSee('Plateforme RH');
    }
}

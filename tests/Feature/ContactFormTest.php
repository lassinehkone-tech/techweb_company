<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_form_submits_successfully(): void
    {
        $response = $this->post('/contact', [
            'nom' => 'Lassine',
            'email' => 'lassine@example.com',
            'message' => 'Je souhaite créer un site vitrine.',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');
        $this->assertDatabaseHas('contacts', [
            'nom' => 'Lassine',
            'email' => 'lassine@example.com',
        ]);
    }

    public function test_contact_form_requires_all_fields(): void
    {
        $response = $this->from('/contact')->post('/contact', []);

        $response->assertRedirect('/contact');
        $response->assertSessionHasErrors(['nom', 'email', 'message']);
        $this->assertDatabaseCount('contacts', 0);
    }
}

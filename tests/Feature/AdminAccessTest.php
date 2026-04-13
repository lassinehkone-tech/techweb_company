<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_routes_require_authentication(): void
    {
        $this->get('/admin/contacts')->assertUnauthorized();
    }

    public function test_authenticated_user_can_access_admin_contacts(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)
            ->get('/admin/contacts')
            ->assertOk();
    }
}

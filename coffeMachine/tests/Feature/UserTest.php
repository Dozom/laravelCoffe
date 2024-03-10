<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function test_register_with_empty_fields()
    {
        Artisan::call('migrate');
        // El formulario carga correctamente
        $response = $this->post(route('validate-register'));
        $responseData = $response->json();
        $this->assertEquals($responseData['status'], 1);
        $this->assertEquals($responseData['error'], 'Some field is not filled');
        $response->assertStatus(200);
    }
    public function test_register_with_valid_user()
    {
        Artisan::call('migrate');
        // El formulario carga correctamente
        $response = $this->withHeaders([
            'X-CSRF-TOKEN' => csrf_token(),
        ])->post(route('validate-register'), [
                    'name' => 'Dani Nager Carpio',
                    'email' => 'dnager@gmail.com',
                    'password' => 'admin1234'
                ]);
        $response->assertStatus(302)->assertSee('Redirecting to');
    }

    public function test_register_with_existent_user()
    {
        $this->test_register_with_valid_user();
        Artisan::call('migrate');
        // El formulario carga correctamente
        $response = $this->withHeaders([
            'X-CSRF-TOKEN' => csrf_token(),
        ])->post(route('validate-register'), [
                    'name' => 'Dani Nager Carpio',
                    'email' => 'dnager@gmail.com',
                    'password' => 'admin1234'
                ]);
        $responseData = $response->json();
        $this->assertEquals($responseData['status'], 1);
        $this->assertEquals($responseData['error'], 'Error saving registers');
        $response->assertStatus(200);
    }

}

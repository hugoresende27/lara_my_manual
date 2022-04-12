<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreUserControllerTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_that_store_controller() :void
    {
        $response = $this->post('/api/users', [
            'email'=> 'e@e',
            'name'=>'espanhol',
            'password'=>'1111'
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', ['email'=>'e@e']);
    }
}

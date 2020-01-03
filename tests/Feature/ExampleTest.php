<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * 
     * @return void
     */
    public function testAfficherMoyenneTest()
    {
        $this->withoutMiddleware();
        $response = $this->json('get', '/marks/create');
        $response->assertStatus(200);
    }
}

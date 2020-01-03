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
        $input = ['niveau'=>'1cs', 'Groupe'=> 9 ];
        $this->withoutMiddleware();
        $response = $this->json('get', '/marks/create', $input);
        $response->assertStatus(200);
    }
}

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
    public function testBasicTest()
    {
        $input = array('Niveau' => '1CS', 'Groupe' => '9');
        $response = $this->call('get', '/marks/create', $input);
        $response->assertStatus(200);
    }
}

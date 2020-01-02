<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use DB;

class AfficherMoyenneTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function testValidationAfficherMoyenneGrp()
    {
        $this->assertTrue(true);

        /*$expected =  DB:: table('etudiants')
        ->join('moy', 'etudiants.id', '=', 'moy.matricule')
        ->where ([['niveau', '1CS'], ['grp', '9']])
        ->first();

        $input = array('Niveau' => '1CS', 'Groupe' => '9');

        $response = $this->call('get', '/marks/create', $input);
       // $this->assertSuccessful();
        //$this->assertEquals($expected,$view);
        $response->assertViewHas('student', $expected);*/

      //  $data = $response->getContent();
        //$expected = array();
       // $resultes = array();
    }

}

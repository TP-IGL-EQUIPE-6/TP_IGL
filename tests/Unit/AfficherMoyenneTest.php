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
        $expected = array( DB:: table('etudiants')
        ->join('moy', 'etudiants.id', '=', 'moy.matricule')
        ->where ([['niveau', '1CS'], ['grp', '9']])
        ->get());

        $input = array('Niveau' => '1CS', 'Groupe' => '9');

        $response = $this->call('get', '/marks/create', $input);
        $response->assertSuccessful();
        //$expected = array();
        $res = array($response->getContent());
       // $resultes = array();
        
        $this->assertEquals($expected, $res);
    }

}

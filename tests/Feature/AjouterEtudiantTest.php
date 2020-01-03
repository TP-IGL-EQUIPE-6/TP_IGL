<?php


namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StudentTest extends TestCase
{
    
    public function testCreateStudentTest(){
        $data = [
            'nom'=>'Khebizi',
            'prenom'=>'ahlem',
            'Matricule'=>'170040',
            'niveau'=>'1cs',
            'section'=>'B',
            'Groupe'=> 9,
        ];
        $response = $this->json('get', '/students/CreerEtudiantForm',$data);
        $response->assertStatus(200);
    } 
}



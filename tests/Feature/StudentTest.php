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
            'niveau'=>'1cs',
            'section'=>'B',
            'Groupe'=> 9,
        ];
$user = factory(\App\User::class)->create();
$response = $this->actingAs($user, 'api')->json('POST', '/students/CreerEtudiantForm',$data);
$response->assertStatus(200);
$response->assertJson(['status' => true]);
$response->assertJson(['message' => "Product Created!"]);
$response->assertJson(['data' => $data]);
   
}

     
}



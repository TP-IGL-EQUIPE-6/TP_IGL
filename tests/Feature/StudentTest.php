<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class StudentTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function student_can_be_created(){
    $user = factory(App\User::class)->create();
        $e = $user->Etudiant()->create([
            'nom'=>'Khebizi',
            'prenom'=>'ahlem',
            'niveau'=>'1cs',
            'section'=>'B',
            'Groupe'=> 9,
        ]);
    
    $found_etudiant=Etudiant::found(1);
    $this.assertEquals($found_etudiant->nom,'khebizi');
    $this.assertEquals($found_etudiant->prenom,'ahlem');
    $this.assertEquals($found_etudiant->niveau,'1cs');
    $this.assertEquals($found_etudiant->section,'B');
    $this.assertEquals($found_etudiant->groupe,9);
}
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public $table = 'etudiants';
    public $timestamps = false;
    protected $fillable = [
        'id','nom','prenom','niveau','section','grp',
    ];
}


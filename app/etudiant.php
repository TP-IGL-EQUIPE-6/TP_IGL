<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public $table = 'etudiant';
    public $timestamps = false;
    protected $fillable = [
        'matricule','nom','prenom','niveau','section','grp',
    ];
}

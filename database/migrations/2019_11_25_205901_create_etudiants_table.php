<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
		Schema::create('etudiant', function(Blueprint $table)
		{
			$table->integer('matricule')->index('matricule');
			$table->string('nom', 30);
			$table->string('prenom', 30);
			$table->string('niveau', 5);
			$table->string('section', 2);
			$table->string('grp');
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etudiants');
    }
}

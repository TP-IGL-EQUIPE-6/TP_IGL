<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnseignantTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('enseignant', function(Blueprint $table)
		{
			$table->integer('ID_enseignant')->primary();
			$table->string('nom', 30);
			$table->string('prenom', 30);
			$table->string('module', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('enseignant');
	}

}

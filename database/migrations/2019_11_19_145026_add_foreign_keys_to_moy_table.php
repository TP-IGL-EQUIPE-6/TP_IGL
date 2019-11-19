<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMoyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('moy', function(Blueprint $table)
		{
			$table->foreign('matricule', 'moy_ibfk_1')->references('matricule')->on('etudiant')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('moy', function(Blueprint $table)
		{
			$table->dropForeign('moy_ibfk_1');
		});
	}

}

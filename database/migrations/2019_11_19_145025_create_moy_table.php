<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('moy', function(Blueprint $table)
		{
			$table->integer('matricule')->index('matricule');
			$table->float('module1', 10, 0);
			$table->integer('coeff1')->default(5);
			$table->float('module2', 10, 0);
			$table->integer('coeff2')->default(4);
			$table->float('module3', 10, 0);
			$table->integer('coeff3')->default(3);
			$table->float('module4', 10, 0);
			$table->integer('coeff4')->default(3);
			$table->float('module5', 10, 0);
			$table->integer('coeff5')->default(2);
			$table->float('module6', 10, 0);
			$table->integer('coeff6')->default(2);
			$table->float('moy', 10, 0)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('moy');
	}

}

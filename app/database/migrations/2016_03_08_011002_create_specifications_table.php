<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSpecificationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('specifications', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cars_id');
			$table->string('marca')->nullable();
			$table->string('modelo');
			$table->string('version');
			$table->integer('anio');
			$table->string('tipo_vehiculo')->nullable();
			$table->string('carroceria')->nullable();
			$table->string('color');
			$table->integer('kilometraje')->nullable();
			$table->string('cilindrada')->nullable();
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('specifications');
	}

}

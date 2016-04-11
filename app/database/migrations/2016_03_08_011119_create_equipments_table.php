<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEquipmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cars_id');
			$table->string('transmision');
			$table->string('direccion');
			$table->string('aire');
			$table->string('radio');
			$table->string('alzavidrios');
			$table->string('espejos');
			$table->string('frenos');
			$table->string('airbag');
			$table->string('cierre');
			$table->string('catalitico');
			$table->string('combustible');
			$table->string('llantas');
			$table->integer('puertas');
			$table->string('alarma');
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
		Schema::drop('equipments');
	}

}

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
			$table->string('transmision')->nullable();
			$table->string('direccion')->nullable();
			$table->string('aire')->nullable();
			$table->string('radio')->nullable();
			$table->string('alzavidrios')->nullable();
			$table->string('espejos')->nullable();
			$table->string('frenos')->nullable();
			$table->string('airbag')->nullable();
			$table->string('cierre')->nullable();
			$table->string('catalitico')->nullable();
			$table->string('combustible')->nullable();
			$table->string('llantas')->nullable();
			$table->integer('puertas')->nullable();
			$table->string('alarma')->nullable();
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

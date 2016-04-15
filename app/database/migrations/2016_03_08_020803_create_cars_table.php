<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('price');
			$table->string('patente');
			$table->integer('visitas');
			$table->boolean('active');
			$table->string('name');
			$table->string('email');
			$table->string('phone');
			$table->string('rut');
			$table->string('tipodeventa');
			$table->integer('duenos');
			$table->string('papeles');
			$table->string('pintura');
			$table->text('comentario');
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
		Schema::drop('cars');
	}

}

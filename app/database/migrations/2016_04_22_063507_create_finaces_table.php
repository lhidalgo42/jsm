<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFinacesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('finaces', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('RUT');
			$table->string('direccion');
			$table->string('telefono');
			$table->string('celular');
			$table->string('fecha_nacimiento');
			$table->string('estado_civil');
			$table->string('email');

			$table->string('empleador');
			$table->string('cargo');
			$table->string('renta liquido');
			$table->string('fecha_ingreso');
			$table->string('direccion_laboral');
			$table->string('telefono_laboral');
			$table->string('tipo_contrato');
			$table->string('otros_ingresos');

			$table->string('nombre_conyuge');
			$table->string('rut_conyuge');
			$table->string('renta_conyuge');

			$table->string('cuenta_corriente');
			$table->string('banco');
			$table->string('antiguedad');

			$table->string('patrimonio');
			$table->string('referencias');
			$table->string('pie_vehiculo');
			$table->string('clave_sii');
			$table->integer('cars_id');
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
		Schema::drop('finaces');
	}

}

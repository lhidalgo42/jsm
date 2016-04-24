<?php


class InfoTableSeeder extends Seeder {

	public function run()
	{
		Info::create([
			'name' => 'subtitulo',
			'value' => 'COMPRO URGENTE'
		]);
		Info::create([
				'name' => 'titulo1',
				'value' => 'Una Familia Comprometida'
		]);
		Info::create([
				'name' => 'titulo2',
				'value' => 'Nuestro Compromiso no termina Aqui'
		]);
		Info::create([
				'name' => 'footer',
				'value' => '20 Años de Experiencia nos avalan.'
		]);
	}

}
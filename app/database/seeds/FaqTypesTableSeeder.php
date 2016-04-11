<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class FaqTypesTableSeeder extends Seeder {

	public function run()
	{
		FaqType::create([
			'Preguntas Frecuentes'
		]);
	}

}
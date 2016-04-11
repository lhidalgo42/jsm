<?php


class UserTableSeeder extends Seeder {

	public function run()
	{
		User::create([
			'name' => 'Leonardo Hidalgo',
			'email' => 'lhidalgosep@gmail.com',
			'password' => '1234'
		]);
		User::create([
				'name' => 'Ivan Salinas',
				'email' => 'isalinas@systemit.cl',
				'password' => '1234'
		]);


}
<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserSeeder');
		$this->command->info('User table seeded!');

		$this->call('PostSeeder');
		$this->command->info('Post table seeded!');

	}

}
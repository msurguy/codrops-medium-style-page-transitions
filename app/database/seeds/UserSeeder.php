<?php

class UserSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'id'			=> 1,
        	'email' 		=> 'admin@email.com',
        	'password' 		=> 'password',
        	'role' 			=> '40',
        	'confirmed' 	=> '1',
        	'name' 			=> 'Admin',
        ));
    }

}
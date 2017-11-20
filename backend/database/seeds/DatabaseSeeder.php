<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Model::unguard();

		// $this->call('UserTableSeeder');
		
		DB::table('users')->where('email', '=', 'admin@yahoo.com')->delete();
		DB::table('users')->where('email', '=', 'pr@yahoo.com')->delete();
		
		DB::table('users')->insert([
				'name' => 'Admin',
				'email' => 'admin@yahoo.com',
				'password' => Hash::make('Admin123')
		]);
		DB::table('users')->insert([
				'name' => 'PR Account',
				'email' => 'pr@yahoo.com',
				'password' => md5('Admin123')
		]);
	}

}

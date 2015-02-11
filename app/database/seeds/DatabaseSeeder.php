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

		$this->call('UsersTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(array('user' => 'admin', 'password' => '$2y$10$Nkm.ycHwvmEZ.qh0doKBQ.wmjEGmMYERbdWYwpokfG/000fY.CYlq'));
	}
}
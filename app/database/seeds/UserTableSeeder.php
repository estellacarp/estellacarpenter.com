	<?php
	class UserTableSeeder extends Seeder
	{
		public function run()
		{

		DB::table('users')->delete();
		User::create(array(
		'name'=> 'Estella Carpenter',
		'username'=>'estella@scotch.io',
		'password'=> Hash:: make ('john'),
		));
	}
}

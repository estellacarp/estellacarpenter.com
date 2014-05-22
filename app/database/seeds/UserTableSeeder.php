	<?php
	class UserTableSeeder extends Seeder
	{
		public function run()
		{

		DB::table('users')->delete();
		User::create(array(
		'name'=> 'Estella Carpenter',
		'username'=>'estella',
		'password'=> Hash:: make (''),
		'Email'=>'estella@hotmail',
		));
	}
}

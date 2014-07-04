	<?php
	class UserTableSeeder extends Seeder
	{
		public function run()
		{

		User::truncate();

		
		User::create([
		'name'=> 'Estella Carpenter',
		'username'=>'estella',
		'password'=> '123',
		'Email'=>'estella@hotmail.com',
		]);

		User::create([
			'name'=> 'Kalissa Carpenter',
			'username'=>'Kalissa',
			'password'=> '123',
			'Email'=>'Kalissa@gmail.com',
			])
	}
}

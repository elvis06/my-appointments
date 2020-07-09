<?php

use Illuminate\Database\Seeder;
Use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Elvis Barrientos',
	        'email' => 'elvis_ebm@hotmail.com',
	        'password' => bcrypt('123456'), // secret
	        'ci' => '7234642',
	        'address' => '',
	        'phone' => '',
	        'role' => 'admin'
    	]);
        factory(User::class, 50)->create();

    }
}

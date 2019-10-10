<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Sandi Pratama',
        	'email' => 'sandicoding@gmail.com',
        	'email_verified_at' => now(),
        	'password' => bcrypt('secret'),
        	'role' => 0
        ]);    
    }
}

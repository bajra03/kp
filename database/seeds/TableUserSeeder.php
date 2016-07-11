<?php

use App\User;
use Illuminate\Database\Seeder;

class TableUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Administrator',
    		'username' => 'admin',
    		'role' => 'admin',
    		'password' => bcrypt('secret')
    	]);
    }
}

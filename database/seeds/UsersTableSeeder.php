<?php

use Findtrans\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
       	'name'=>'admin',
       	'email'=>'mradmin@gmail.com',
       	'password'=>Hash::make('password')
       	]);
    }
}

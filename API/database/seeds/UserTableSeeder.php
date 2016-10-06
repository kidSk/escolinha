<?php

use Illuminate\Database\Seeder;
use cmpn\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$users = [
       [
       'name'=>'kid',
       'email'=>'kid@kid.com',
       'password'=>Hash::make(123456789)
       ]
       ];
       foreach ($users as $user) {
          User::create($user);
      }
  }
}

<?php

use Illuminate\Database\Seeder;
use App\User;


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
        'email'=>'admin@bikesprint.ee',
        'google_id'=>0,
        'facebook_id'=>0,
        'password'=>bcrypt('admin123'),
        'is_admin'=>true,
      ]);
    }
}

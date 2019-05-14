<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(UsersTableSeeder::class);
=======
        // $this->call(UsersTableSeeder::class);
         $this->call(AdminUserSeeder::class);
>>>>>>> 68ff5aea03b05a3b379cf46e04d65b01a9b8d6a7
    }
}

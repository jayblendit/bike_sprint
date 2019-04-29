<?php

use Illuminate\Database\Seeder;
use App\Bike;

class BikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Bike::create([
        'serial_number'=>'123123',
        'rpm'=>0
      ]);
    }
}

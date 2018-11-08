<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('actors')->insert([
        [
          "first_name" => "Terry",
          "last_name" => "Crews",
        ],
        [
          "first_name" => "Tom",
          "last_name" => "Cruise",
        ],
        [
          "first_name" => "Jason",
          "last_name" => "Statham",
        ],
        [
          "first_name" => "Wayne",
          "last_name" => "Johnson",
        ],
        [
          "first_name" => "Morgan",
          "last_name" => "Freeman",
        ],
      ]);
    }
}

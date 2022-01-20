<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table("players")->insert([
                "name" => $faker->name(),
                "position" => $faker->randomElement([
                    "G",
                    "F",
                    "C"
                ]),
                "age" => $faker->numberBetween(18, 80),
                "all-star" => $faker->numberBetween(0, 20),
                "country" =>$faker->country(),
            ]);
        }

    }
}

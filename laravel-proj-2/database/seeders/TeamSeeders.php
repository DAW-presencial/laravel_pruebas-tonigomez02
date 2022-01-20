<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

            DB::table("team")->insert([
                "name" => "Lakers",
                "money" => $faker->numerify('##########'),
                "rings" => $faker->numberBetween(0, 17),
            ]);
    }
}

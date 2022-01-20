<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Toni',
            'email' => 'agomezj@cifpfbmoll.eu',
            'email_verified_at' => now(),
            'password' => Hash::make('tonigomez'),
            'remember_token' => Str::random(10),
        ]);
    }
}

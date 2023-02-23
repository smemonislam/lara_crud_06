<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach( range(1, 10) as $value ){
            User::create([
                'role_id'   => $faker->randomElement([1,2,3,4,5,6]),
                'name'      => $faker->name(),
                'email'     => $faker->unique()->safeEmail(),
                'address'   => $faker->address(),
                'phone'     => $faker->phoneNumber(),
                'password'  => bcrypt('123456')
            ]);
        }
    }
}

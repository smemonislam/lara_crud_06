<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach( range(1, 6) as $value ){
            Role::create([
                'role' => $faker->randomElement(['Admin', 'Super Admin', 'Author', 'Suscribe', 'Contribute', 'Follower']),
            ]);
        }
    }
}

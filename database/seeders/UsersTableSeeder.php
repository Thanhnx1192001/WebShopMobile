<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $fake  = Factory::create();
        $limit = 10;

        for ($i = 0; $i < $limit; $i++){
            DB::table('users')->insert([
                'role' => rand(0,1),
                'name' => $fake->name,
                'email' => $fake->unique->email,
                'phone_number' => $fake->phoneNumber,
                'address' => $fake->address,
                'password' => bcrypt('thanh0123'),
                
            ]);
        }
    }
}

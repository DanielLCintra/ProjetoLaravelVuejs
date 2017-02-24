<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
use App\Address;

class AddressesSeeder extends Seeder
{
  
   public function run()
    {
        $faker = Faker::create();
        // following line retrieve all the user_ids from DB
        $users = User::pluck('id')->all();
        foreach(range(1,50) as $index){
            $address = Address::create([
                'user_id' => $faker->randomElement($users),	
                'street' => $faker->streetName,
                'number' => $faker->randomNumber,
                'city' => $faker->city,
                'state' => $faker->state,
                'created_at' => $faker->datetime,
                'updated_at' => $faker->datetime,
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
    {
    	$faker = Faker::create();
    	foreach (range(1,100) as $index) {
	        $client = new \App\Client;
            $client->first_name= $faker->firstName;
            $client->last_name= $faker->lastName;
            $client->middle_name= $faker->firstName;
            $client->maiden_name= $faker->lastName;
            $client->center_id= $faker->numberBetween($min = 1, $max = 100);
            $client->save();
        }
    }
}



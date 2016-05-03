<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientsAddressTableSeeder extends Seeder
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
	        $client = new \App\ClientAddress;
            $client->client_id= $index;
            $client->address1= $faker->streetAddress;
            $client->address2= $faker->streetAddress;
            $client->city= $faker->city;
            $client->state= $faker->state;
            $client->postal_code= $faker->postcode;
            $client->save();
        } 
    }
}

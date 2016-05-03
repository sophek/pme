<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\PmeUtils as PmeUtils;

class ClientsRelativeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run()
    {
       $faker = Faker::create();
        $pme= new \App\PmeUtils;
       
        foreach (range(1,100) as $index) {
            $relative = new \App\Relative;
            $relative->client_id= $index;
            $relative->gender = $pme->makeGender($faker->numberBetween($min = 1, $max = 2));
            $relative->first_name = $faker->firstName;
            $relative->last_name = $faker->lastName;
            $relative->surname = $faker->lastName;
            $relative->relationship = $pme->makeRelationship($faker->numberBetween($min = 1, $max = 9));
            $relative->race=$pme->makeRace($faker->numberBetween($min = 1, $max = 5));
            $relative->dob= $faker->date($format = 'Y-m-d', $max = 'now');
            $relative->save();
        }
        
        foreach (range(1,100) as $index) {
            $relative = new \App\Relative;
            $relative->client_id= $index;
            $relative->gender = $pme->makeGender($faker->numberBetween($min = 1, $max = 2));
            $relative->first_name = $faker->firstName;
            $relative->last_name = $faker->lastName;
            $relative->surname = $faker->lastName;
            $relative->relationship = $pme->makeRelationship($faker->numberBetween($min = 1, $max = 9));
            $relative->race=$pme->makeRace($faker->numberBetween($min = 1, $max = 5));
            $relative->dob= $faker->date($format = 'Y-m-d', $max = 'now');
            $relative->save();
        }
        
    }
    
}

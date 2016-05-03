<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\PmeUtils as PmeUtils;

class ClientsProfileTableSeeder extends Seeder
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
            
	        $client = new \App\ClientInfo;
            $client->client_id= $index;
            $client->all_sources= $faker->numberBetween($min = 1000, $max = 9000); // 8567;
            $client->comment= $faker->sentence($nbWords = 6, $variableNbWords = true);
            
            $education = $pme->makeEducation($faker->numberBetween($min = 1, $max = 16));
            
            $client->education= $education;
            $client->email= $faker->email;
            $client->id_type= $faker->state;
            $client->phone= $faker->phoneNumber;
            $client->id_number= $faker->numberBetween($min = 1000, $max = 9999);
           
           $race = $pme->makeRace($faker->numberBetween($min = 1, $max = 5));
           $client->race = $race;
           
           /*
            $rnd = $faker->title($gender = null|'male'|'female');
            if($rnd === 'Ms.'){
                $client->race= "White";
            } elseif ($rnd === 'Mr.') {
                $client->race= "Black";
            } else {
                $client->race= "Asian";
            }
            
            
            if($faker->title($gender = null|'male'|'female') === 'Ms.'){
                $client->gender= "F";
            } else {
                $client->gender= "M";
            }
            
            
            */
            
            $gender = $pme->makeGender($faker->numberBetween($min = 1, $max = 5));
            $client->gender= $gender;
            
            $maritial = $pme->makeMarital($faker->numberBetween($min = 1, $max = 5));
            $client->maritial= $maritial;
            
            $suffix = $pme->makeSuffix($faker->numberBetween($min = 1, $max = 5));
            $client->surname= $suffix;
            
            $client->dob= $faker->date($format = 'Y-m-d', $max = 'now');
            $client->monthly_income= $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL);
            $client->maiden_name= $faker->lastName;
            
            $client->save();
        } 
    }
}



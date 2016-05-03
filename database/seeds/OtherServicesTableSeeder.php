<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class OtherServicesTableSeeder extends Seeder
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
	        $table = new \App\Other;
            $table->visit_id=$index;
            $table->other1=$faker->text($maxNbChars = 50);
            $table->other2=$faker->text($maxNbChars = 50);
            $table->other3=$faker->text($maxNbChars = 50);
            $table->other4=$faker->text($maxNbChars = 50);
            $table->other5=$faker->text($maxNbChars = 50);
            $table->other6=$faker->text($maxNbChars = 50);
            $table->save();
        }
        
    }
}

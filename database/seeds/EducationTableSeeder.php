<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        $list = ['1 year','2 years','3 years','4 years','5 years','6 years','7 years','8 years','9 years','10 years','11 years','12 years','some college','associate degree','bachelor’s degree','graduate degree']; 
        $collection = collect($list)->map(function ($name) {
        $education = new \App\Schooling;
        $education->name = $name;
        $education->save();
        });
        
    }
}

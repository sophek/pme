<?php

use Illuminate\Database\Seeder;

class ProfessionalVisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $list = ["MD","DO","DDS","NP","PA-C","RN","LVN","OTHER"]; 
        $collection = collect($list)->map(function ($name) {
        $professional = new \App\ProfessionalVisit;
        $professional->name = $name;
        $professional->save();
        });
        
    }
}

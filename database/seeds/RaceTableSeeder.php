<?php

use Illuminate\Database\Seeder;

class RaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = ["American Indian","Asian/Indian","Black","Hispanic","White"]; 
        $collection = collect($list)->map(function ($name) {
        $race = new \App\Race;
        $race->name = $name;
        $race->save();
        });
    }
}

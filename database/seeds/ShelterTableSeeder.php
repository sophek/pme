<?php

use Illuminate\Database\Seeder;

class ShelterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $list = ["Women's Shelter","Cooling Center","Warming Center","Homeless Shelter","Men's Shelter","Disaster Shelter","Other Shelter"]; 
        $collection = collect($list)->map(function ($name) {
        $shelter = new \App\Shelter;
        $shelter->name = $name;
        $shelter->save();
        });
    }
}

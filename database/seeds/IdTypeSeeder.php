<?php

use Illuminate\Database\Seeder;

class IdTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $list = ["SS#","Driver License #","Other #","Passport #","Visitors Visa #","State ID #","Legal Resident #"];
        $collection = collect($list)->map(function ($name) {
        $idType = new \App\IdType;
        $idType->name = $name;
        $idType->save();
        });
    }
}

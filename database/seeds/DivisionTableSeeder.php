<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $list = ["North American Division"]; 
        $collection = collect($list)->map(function ($name) {
        $division = new \App\Division;
        $division->name = $name;
        $division->save();
        });
        
    }
}

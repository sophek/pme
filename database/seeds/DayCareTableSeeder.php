<?php

use Illuminate\Database\Seeder;

class DayCareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = ["Adult","Child"]; 
        $collection = collect($list)->map(function ($name) {
        $table = new \App\DayCare;
        $table->name = $name;
        $table->save();
        });
    }
}

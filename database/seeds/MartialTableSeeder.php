<?php

use Illuminate\Database\Seeder;

class MartialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = ["Divorced","Married","Separated","Single","Widowed"]; 
        $collection = collect($list)->map(function ($name) {
        $martialStatus = new \App\MaritalStatus;
        $martialStatus->name = $name;
        $martialStatus->save();
        });
    }
}

<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $list = ["Active","Inactive","Temporary","Disaster Operation"]; 
        $collection = collect($list)->map(function ($name) {
        $status = new \App\Status;
        $status->name = $name;
        $status->save();
        });
        
    }
}

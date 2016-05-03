<?php

use Illuminate\Database\Seeder;

class SurnameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       
        $list = ['Jr.','Sr.','II','III','IV','V']; 
        $collection = collect($list)->map(function ($name) {
        $surname = new \App\Surname;
        $surname->name = $name;
        $surname->save();
        });
        
    }
}

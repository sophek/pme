<?php

use Illuminate\Database\Seeder;

class TypeSessionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = ["Individual","Group"]; 
        $collection = collect($list)->map(function ($name) {
        $table = new \App\TypeSession;
        $table->name = $name;
        $table->save();
        });
    }
}

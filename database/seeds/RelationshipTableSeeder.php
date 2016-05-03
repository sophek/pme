<?php

use Illuminate\Database\Seeder;

class RelationshipTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = ["Grandparent","Daughter","Father","Husband","Mother","Other Adult","Son","Wife","Other Minor"]; 
        $collection = collect($list)->map(function ($name) {
        $relationship = new \App\Relationship;
        $relationship->name = $name;
        $relationship->save();
        });
    }
}

<?php

use Illuminate\Database\Seeder;

class UnionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        $list = ["Atlantic Union Conference","Columbia Union Conference","Lake Union Conference","Mid-America Union Conference","North Pacific Union Conference","Pacific Union Conference","Southern Union Conference","Southwestern Union Conference","Canadian Union Conference"]; 
        $collection = collect($list)->map(function ($name) {
        $union = new \App\Union;
        $union->name = $name;
        $union->division_id=1;
        $union->save();
        });
        
    }
}

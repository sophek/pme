<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Volunteer;
use DB;
class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $volunteers = DB::table('volunteers')
 ->select('*', 
    DB::raw('SUM(hours) as total_hours'),
    DB::raw('SUM(count) as total_count'), 
    DB::raw('SUM(expenses_salary) as total_expenses_salary'),
    DB::raw('SUM(expenses_other) as total_expenses_other'),
    DB::raw('SUM(income_church) as total_income_church'),
    DB::raw('SUM(income_corp) as total_income_corp'),
    DB::raw('SUM(income_individual) as total_income_individual'),
    DB::raw('SUM(income_fees) as total_income_fees'),
    DB::raw('SUM(income_others) as total_income_others'))
 ->groupBy('center_id')
 ->paginate(15);
        return view('volunteer.index',compact('volunteers'));
        
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

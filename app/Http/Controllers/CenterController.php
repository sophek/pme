<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Center;
use Illuminate\Pagination\Paginator;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        
    $centers = DB::select(DB::raw('SELECT a.id, a.created_at,a.center_code, a.name, (select count(*) from clients where clients.center_id = a.id) as clienttotal,
(select count(*) from visits where visits.client_id = b.id group by visits.client_id) as visittotal,
(select sum(count) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as volunteertotal,
(select sum(hours) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as volunteerhourstotal,
(select sum(expenses_salary) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as expenses_salary,
(select sum(expenses_other) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as expenses_other,
(select sum(income_church) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as income_church,
(select sum(income_corp) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as income_corp,
(select sum(income_individual) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as income_individual,
(select sum(income_fees) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as income_fees,
(select sum(income_others) from volunteers where volunteers.center_id = a.id group by volunteers.center_id) as income_others
FROM [Centers] a 
LEFT JOIN Clients b ON b.center_id = a.id 
group by a.id
Order by a.id asc
'));
  
  
  //dd($centers);
  
  return view('center.index',compact('centers'));
        
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

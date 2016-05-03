<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use DB;
class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
      $visits = DB::table('visits')
                    ->join('community_developements','visits.id','=','community_developements.visit_id')
                    ->join('emotional_spirtuals','visits.id','=','emotional_spirtuals.visit_id')
                    ->join('household_assistances','visits.id','=','household_assistances.visit_id')
                    ->join('disaster_assistances','visits.id','=','disaster_assistances.visit_id')
                    ->join('education_assistances','visits.id','=','education_assistances.visit_id')
                    ->join('health_services','visits.id','=','health_services.visit_id')
                    ->join('health_educations','visits.id','=','health_educations.visit_id')
                    ->join('others','visits.id','=','others.visit_id')
                    ->join('clients','visits.client_id','=','clients.id')
                    
                    ->select('visits.*','community_developements.*',
                    'emotional_spirtuals.*',
                    'household_assistances.*',
                    'disaster_assistances.*',
                    'education_assistances.*',
                    'health_services.*',
                    'health_educations.*',
                    'others.*','clients.*')
                    ->paginate(15);
        
       
      
        $visits = \App\Visit::find(1)->with('EmotionalSpirtual','householdAssistance')
        ->paginate(15);
        
        
        return view('visit.index',compact('visits'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('visit.create');
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
        
        $user = App\User::find(1);
        
        return $user;
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\ClientInfo;
use App\Center;
use DB;

use App\Http\Requests;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        //Get the client object ;
        $clients = DB::table('clients')
                    ->join('client_infos','clients.id','=','client_infos.client_id')
                    ->join('client_addresses','clients.id','=','client_addresses.client_id')
                    ->select('clients.*','client_infos.*','client_addresses.*')
                    ->simplePaginate(15);
                    
        
        //dd($clients[0]->id);            
                    
        
        return view('client.index',compact('clients'));
        
    }


    public function clients($id)
    {
        
        
        //Get the client object ;
        $clients = DB::table('clients')
                    ->join('client_infos','clients.id','=','client_infos.client_id')
                    ->join('client_addresses','clients.id','=','client_addresses.client_id')
                    ->select('clients.*','client_infos.*','client_addresses.*')
                    ->where('clients.center_id','=', $id)
                    ->simplePaginate(15);
                    
        
        //dd($clients[0]->id);            
                    
        
        return view('client.index',compact('clients'));
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $client = \App\Client::find(0);
        $races = \App\Race::all();
        $states = \App\State::all();
        $idtypes = \App\IdType::all();
        $educationlevels = \App\EducationLevel::all();
        $maritals = \App\MaritalStatus::all();
        $suffixes = \App\Surname::all();
        
        return view('client.create',compact('client','races','states','idtypes','educationlevels','maritals','suffixes'));
        
       
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
        
        //dd($request->all());
        
        
        DB::transaction(function($request) use ($request) {
           
           
        $client = new \App\Client;
        $client->center_id = 1;
        $client->first_name = $request->input('first_name');
        $client->last_name = $request->input('last_name');
        $client->middle_name = $request->input('middle_name');
        $client->maiden_name = $request->input('maiden_name');
        $id = $client->save();
        
        //Get Client Address
        
        $client_address = new \App\ClientAddress;
        $client_address->client_id = $id;
        $client_address->address1 = $request->input('address1');
        $client_address->address2 = $request->input('address2');
        $client_address->city = $request->input('city');
        $client_address->state = $request->input('state');
        $client_address->postal_code = $request->input('postal_code');
        $client_address->county = $request->input('county');
        
        //Get the Client profile and update it       
        $client_profile = new \App\ClientInfo;
        $client_profile->client_id = $id;
        $client_profile->race = $request->input('race');
        $client_profile->gender = $request->input('gender');
        $client_profile->monthly_income = $request->input('monthly_income');
        $client_profile->education = $request->input('education');
        $client_profile->id_type = $request->input('id_type');
        $client_profile->id_number = $request->input('id_number');
        $client_profile->dob = $request->input('dob');
        $client_profile->maritial = "Married";
        
        $client->address()->save($client_address);
        $client->profile()->save($client_profile);
       
            
        });
        
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
        $client = \App\Client::findorFail($id);
        $profile = $client->profile()->get();
        $contact = $client->address()->get();
        $relatives = $client->relatives()->get();
        $races = \App\Race::all();
        $states = \App\State::all();
        $idtypes = \App\IdType::all();
        $educationlevels = \App\EducationLevel::all();
        
        //$visits = \App\Visit::
        $visits = \App\Visit::where('client_id', $id)->get();
        
        return view('client.show',compact('client','profile','contact','relatives','races','states','idtypes','educationlevels','visits'));
        
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
        
        $this->validate($request,[
            'first_name' => 'required',
            'last_name'=> 'required',
            'address1'=> 'required',
            'city' => 'required',
            'state' => 'required',
            'postal_code'=> 'required',
            'dob'=> 'required|date',
        ]);
        
        //Find Client
        $client = \App\Client::findorFail($id);
        $client->first_name = $request->input('first_name');
        $client->last_name = $request->input('last_name');
        $client->middle_name = $request->input('middle_name');
        $client->maiden_name = $request->input('maiden_name');
        
        //Get Client Address
        $addressId = $client->address()->first()->id;
 
        $client_address = \App\ClientAddress::findorFail($addressId);
        $client_address->address1 = $request->input('address1');
        $client_address->client()->associate($client);
        $client_address->save();
 
        //Get the Client profile and update it        
        $profileId = $client->profile()->first()->id;
        $client_profile = \App\ClientInfo::findorFail($profileId);
        $client_profile->race = $request->input('race');
        $client_profile->gender = $request->input('gender');
        $client_profile->monthly_income = $request->input('monthly_income');
        $client_profile->education = $request->input('education');
        $client_profile->id_type = $request->input('id_type');
        $client_profile->id_number = $request->input('id_number');
        $client_profile->dob = $request->input('dob');
        
        $client_profile->client()->associate($client);
        $client_profile->save();
        
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

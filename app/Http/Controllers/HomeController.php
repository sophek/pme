<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::table('clients')
                    ->join('client_infos','clients.id','=','client_infos.client_id')
                    ->join('client_addresses','clients.id','=','client_addresses.client_id')
                    ->select('clients.*','client_infos.*','client_addresses.*')
                    ->simplePaginate(15);
                    
         $clientsCount = DB::table('clients')->count();           
        
        return view('home',compact('clients','clientsCount'));
    }
}

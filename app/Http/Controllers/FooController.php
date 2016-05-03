<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suffix;
use App\Education;

use App\Http\Requests;

class FooController extends Controller
{
    //
    
      public function __construct()
    {
        $this->middleware(['auth','web']);
    }
    
    public function index()
    {
         $educations = Education::all();
         return view('foo.index',compact('educations'));
    }
    
    public function store(Request $request){
        
        
    }
    
}

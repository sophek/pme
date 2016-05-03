<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conference;
use App\Division;
use App\Education;
use App\IdType;
use App\Marital;
use App\Permission;
use App\ProfessionalVisit;
use App\Race;
use App\Role;
use App\Relationship;
use App\Shelter;
use App\State;
use App\Status;
use App\Suffix;
use App\Union;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UtilsController extends Controller
{
    //
    
       public function __construct()
    {
        $this->middleware(['auth','web']);
    }

    
    public function index()
    
    {
    $rs = ProfessionalVisit::find(1);
    print_r($rs);    
    }
    
    //main function to objects
    private function setObject ($obj, $col){
        //Create an null $id variable
        $id = null;
        // set delete variable, this is for the delete function 
        $delete = false;
        
        //Loop thru the colums which comes from the form array 
        foreach ($col as $key => $value) {
            //exclude the _token column
            if ($key !== '_token') {
                //loop thru the colums and assign the values to each colums 
                if ($key !== 'id') {
                    //if the column delete is passed and set to on, set the delete to true;
                    if ($key === 'delete' && $value === 'on') {
                        $delete = true;   
                    } elseif ($key === 'delete' && $value === '') {
                        $delete = false;
                    } else {
                        //Set the values and colunms
                        $obj->$key = $value;    
                    }
                        
                } else {
                    $id = $value;
                    //if the $id is blank set it to null
                    if ($id === '') {
                        $id = null;
                    }
                }
            }
       }
        //If the id is not null that means it's an update;
        if (!is_null($id)){
            //Get the data for this id;
            $obj = $obj::find($id);
            //Loop thru the data again
            foreach ($col as $key => $value) {
            if ($key !== '_token') {
                //Get data for the columns, since we are updating we will include the id column;
                 $obj->$key = $value;
              }
            }
         }
         //Save the object 
        if ($delete) {
            $obj->delete();
        } else {
            $obj->save();    
        }
        
    }
    
    private function modelObject($methodType,$obj,$col,$data,$value){
        if ($methodType === 'get') {
                    $this->setObject($obj,[$col=>$value]);
                } else {
                    // Validate the level input;
                    $this->validate($request, [$col => 'required']);
                    $this->setObject($obj,$data);
                }
    }
     
    public function store(Request $request, $controller,$value="")
    {
        $methodType = 'get';
        $data = null;
        
        if ($request->isMethod('post')) {
            $methodType = 'post';
            $data = $request->all();
        }
        switch ($controller) {
            
                case 'conference':
                    $this->validate($request, ['name' => 'required','abbr'=>'required']);
                    $this->setObject(new State,$data);
                    break;
                
                case 'division':
                    $this->modelObject($methodType,new Division,"name",$data,$value);
                    break;

                case 'education':
                    $this->modelObject($methodType,new Education,"name",$data,$value);
                    break;
                
                case 'idtype':
                    $this->modelObject($methodType,new IdType,"name",$data,$value);
                    break;
                
                case 'race':
                    $this->modelObject($methodType,new Race,"name",$data,$value);
                    break;
                
                case 'role':
                    $this->modelObject($methodType,new Role,"name",$data,$value);
                    break;    
                
                case 'marital':
                    $this->modelObject($methodType,new Marital,"name",$data,$value);
                    break;
                
                case 'professionalvisit':
                    $this->modelObject($methodType,new ProfessionalVisit,"name",$data,$value);
                    break;
                
                case 'relationship':
                    $this->modelObject($methodType,new Relationship,"name",$data,$value);
                    break;
                
                case 'shelter':
                    $this->modelObject($methodType,new Shelter,"name",$data,$value);
                    break;
                
                case 'status':
                    $this->modelObject($methodType,new Status,"name",$data,$value);
                    break;
                
                case 'suffix':
                    $this->modelObject($methodType,new Suffix,"name",$data,$value);                
                    break;
                
                case 'state':
                    $this->validate($request, ['name' => 'required','abbr'=>'required']);
                    $this->setObject(new State,$data);
                    break;
                
            default:
                # code...
                break;
        }    
    }
    
}

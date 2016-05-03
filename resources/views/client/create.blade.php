
@extends('layouts.pme')

@section('title','Clients')
@section('page-title')
<div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <h4 class="page-title">Clients</h4>
                        <ol class="breadcrumb">
                            <li>
                                <a href="#">Ubold</a>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                            </li>
                            <li class="active">
                                Blank Page
                            </li>
                        </ol>

                    </div>
                </div>
@stop

@section('content')

    <div class="row">
                    <form action="{{ url('client/store') }}" method="post">
                        {!! csrf_field() !!}
                        
                        <div class="card-box m-b-10">
                            <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Personal Info</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                            <label for="first_name">First Name*</label>
                                            <input type="text" name="first_name" placeholder="First Name" class="form-control" id="first_name" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="last_name">Last Name*</label>
                                            <input type="text" name="last_name" placeholder="Last Name" id="last_name" class="form-control" value="">
                                        </div>
                                    <div class="form-group">
                                            <label for="middle_name">Email</label>
                                            <input type="text" name="email" placeholder="Email" class="form-control" id="email" value="">
                                        </div>
                                    <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" name="middle_name" placeholder="Middlen Name" class="form-control" id="middle_name" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="maiden_name">Maiden Name</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="">
                                        </div>
                                        
                                        
                                <div class="form-group">
                                            <label for="id_type">Suffix</label>
                                                <select class="form-control" name="surname">
                                                    @foreach ($suffixes as $suffix)
                                                        <option value="{{$suffix->name}}">{{$suffix->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Contact Info</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    
                                            <label for="address1">Address 1*</label>
                                            <input type="text" name="address1" class="form-control" placeholder="Address" id="address1" value="">
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label for="address2">Address 2</label>
                                            <input type="text" name="address2" placeholder="" 
                                            class="form-control" id="address2" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="city">City*</label>
                                            <input type="text" name="city" class="form-control" 
                                            required="" placeholder="City" 
                                            id="city" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="state">State</label>
                                                <select class="form-control" name="state">
                                                    @foreach ($states as $state)
                                                        <option value="{{$state->name}}">{{$state->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                <div class="form-group">
                                            <label for="postal_code">Postal Code</label>
                                            <input type="text" name="postal_code" placeholder="Postal code" class="form-control" id="postal_code" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="county">County</label>
                                            <input type="text" name="county" placeholder="County" id="county" class="form-control" value="">
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title">Profile Info</h3>
                            </div>
                            <div class="panel-body">
                                
                                <div class="form-group">
                                            <label for="id_type">Id Type</label>
                                                <select class="form-control" name="id_type">
                                                    @foreach ($idtypes as $idtype)
                                                        <option value="{{$idtype->name}}">{{$idtype->name}}</option>
                                                    @endforeach
                                                    
                                                    <option value="1">#SS</option>
                                                </select>
                                            </div>
                                
                                
                                <div class="form-group">
                                            <label for="id_number">Id Number</label>
                                            <input type="text" name="id_number" placeholder="" class="form-control" id="id_number" value="">
                                        </div>
                                
                                <div class="form-group">
                                            <label for="userName">Gender*</label>
                                           
                                            
                                                <div class="radio radio-danger">
                                                    <input type="radio" name="gender" id="male" value="M" checked>
                                                    <label for="male">
                                                        Male
                                                    </label>
                                                
                                                </div>
                                                <div class="radio radio-pink">
                                                    <input type="radio" name="gender" id="female" value="F">
                                                    <label for="female">
                                                        Female
                                                    </label>
                                                </div>
                                </div>
                                
                                
                                <div class="form-group">
                                            <label for="id_type">Marital Status</label>
                                                <select class="form-control" name="maritial">
                                                    @foreach ($maritals as $marital)
                                                        <option value="{{$marital->name}}">{{$marital->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                
                                
                                <div class="form-group">
                                            <label for="userName">Education</label>
                                                <select class="form-control" name="education">
                                                    @foreach ($educationlevels as $educationlevel)
                                                        <option value="{{$educationlevel->name}}">{{$educationlevel->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label for="race">Race</label>
                                                <select class="form-control" name="race">
                                                    @foreach ($races as $race)
                                                    <option value="{{$race->name}}">{{$race->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                <div class="form-group">
                                            <label for="dob">Date of Birth*</label>
                                            <input type="text" name="dob" placeholder="Date of Birth" class="form-control" id="dob" value="">
                                        </div>
                                
                                <div class="form-group">
                                            <label for="dob">Total Monthly Income</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dob">Comment</label>
                                            <textarea name="comment" class="form-control" id="comment"></textarea>
                                        </div>
                                        
                                  <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>         
                                
                            </div>
                        </div>
                    </div>

                </div>
                        </div>
                        </form>
                        

                </div>
@endsection

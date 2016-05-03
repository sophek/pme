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
                    <div class="col-sm-5 col-md-4 col-lg-3">
                        <div class="profile-detail card-box">
                            <div>
                                
                                @if ($profile[0]->gender === 'F')
                                <a href="#">
                                    <span class="fa-stack fa-2x" style="color:pink">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                  </a>
                                 @else
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-male fa-stack-1x"></i>
                                    </span>
                                  </a>
                                  @endif
                                
                                <hr>
                                <h4 class="text-uppercase font-600">About {{$client->first_name}} {{$client->last_name}}</h4>
                                <p class="text-muted font-13 m-b-30">
                                {{$profile[0]->comment or ''}}
                                </p>

                                <div class="text-left">
                                    <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">{{$client->first_name}} {{$client->last_name}}</span></p>

                                    <p class="text-muted font-13"><strong>Phone :</strong><span class="m-l-15">{{$client->phone or ''}}</span></p>

                                    <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">{{$profile[0]->email or ''}}</span></p>

                                    <p class="text-muted font-13"><strong>Center :</strong> <span class="m-l-15">USA</span></p>

                                </div>
                            </div>

                        </div>

                        <div class="card-box">
                            <h4 class="m-t-0 m-b-20 header-title"><b>Relatives <span class="text-muted">({{count($relatives)}})</span></b></h4>

                            <div class="friend-list">
                                
                                @foreach ($relatives as $relative)
                                @if ($relative->gender === 'F')
                                <a href="#">
                                    <span class="fa-stack fa-2x" style="color:pink">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                  </a>
                                 @else
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-male fa-stack-1x"></i>
                                    </span>
                                  </a>
                                  @endif
                                @endforeach
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-9">
                        
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                        
                        <form action="{{ url('client/update/'.$client->id) }}" method="post">
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
                                            <input type="text" name="first_name" placeholder="First Name" class="form-control" id="first_name" value="{{$client->first_name or ''}}">
                                        </div>
                                <div class="form-group">
                                            <label for="last_name">Last Name*</label>
                                            <input type="text" name="last_name" placeholder="Last Name" id="last_name" class="form-control" value="{{$client->last_name or ''}}">
                                        </div>
                                    <div class="form-group">
                                            <label for="middle_name">Email</label>
                                            <input type="text" name="email" placeholder="Email" class="form-control" id="email" value="{{$profile->email or ''}}">
                                        </div>
                                    <div class="form-group">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" name="middle_name" placeholder="Middlen Name" class="form-control" id="middle_name" value="{{$client->middle_name or ''}}">
                                        </div>
                                <div class="form-group">
                                            <label for="maiden_name">Maiden Name</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="{{$client->maiden_name or ''}}">
                                        </div>
                                 <div class="form-group">
                                            <label for="surname">Sur Name</label>
                                            
                                            
                                            <input type="text" name="surname" placeholder="Surname" class="form-control" id="surname" value="{{$profile->surname or ''}}">
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel Purple</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    
                                            <label for="address1">Address 1*</label>
                                            <input type="text" name="address1" class="form-control" placeholder="Address" id="address1" value="{{$contact[0]->address1 or ''}}">
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label for="address2">Address 2</label>
                                            <input type="text" name="address2" placeholder="" 
                                            class="form-control" id="address2" value="{{$contact[0]->address2 or ''}}">
                                        </div>
                                <div class="form-group">
                                            <label for="city">City*</label>
                                            <input type="text" name="city" class="form-control" 
                                            required="" placeholder="City" 
                                            id="city" value="{{$contact[0]->city or ''}}">
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
                                            <input type="text" name="postal_code" placeholder="Postal code" class="form-control" id="postal_code" value="{{$contact[0]->postal_code}}">
                                        </div>
                                <div class="form-group">
                                            <label for="county">County</label>
                                            <input type="text" name="county" placeholder="County" id="county" class="form-control" value="{{$contact[0]->county}}">
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title">Panel Pink</h3>
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
                                            <input type="text" name="id_number" placeholder="" class="form-control" id="id_number" value="{{$profile[0]->id_number or ''}}">
                                        </div>
                                
                                <div class="form-group">
                                            <label for="userName">Gender*</label>
                                            @if ($profile[0]->gender === 'M')
                                            
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
                                            @else
                                            <div class="radio radio-danger">
                                                    <input type="radio" name="gender" id="male" value="M" checked>
                                                    <label for="male">
                                                        Male
                                                    </label>
                                                
                                                </div> 
                                                <div class="radio radio-pink">
                                                    <input type="radio" name="gender" id="female" value="F" checked>
                                                    <label for="female">
                                                        Female
                                                    </label>
                                                </div>
                                            @endif 
                                            
                                                
                                                
                                                

                                </div>
                                <div class="form-group">
                                            <label for="userName">Education</label>
                                                <select class="form-control" name="education">
                                                    <option value="{{$profile[0]->education}}">{{$profile[0]->education}}</option>
                                                    
                                                    @foreach ($educationlevels as $educationlevel)
                                                        <option value="{{$educationlevel->name}}">{{$educationlevel->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                            <label for="race">Race</label>
                                                <select class="form-control" name="race">
                                                    <option value="{{$profile[0]->race}}">{{$profile[0]->race}}</option>
                                                    @foreach ($races as $race)
                                                    <option value="{{$race->name}}">{{$race->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                <div class="form-group">
                                            <label for="dob">Date of Birth*</label>
                                            <input type="text" name="dob" placeholder="Date of Birth" class="form-control" id="dob" value="{{$profile[0]->dob or ''}}">
                                        </div>
                                
                                <div class="form-group">
                                            <label for="dob">Total Monthly Income</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="{{$profile[0]->monthly_income or ''}}">
                                        </div>
                                        
                                  <div class="form-group">
                                  <button type="submit">Submit</button>
                                  </div>         
                                
                            </div>
                        </div>
                    </div>

                </div>
                        </div>
                        </form>
                        
                        
                        
                        @foreach ($relatives as $relative)
                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    @if ($relative->gender === 'F')
                                <a href="#">
                                    <span class="fa-stack fa-2x" style="color:pink">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-female fa-stack-1x"></i>
                                    </span>
                                  </a>
                                 @else
                                <a href="#">
                                    <span class="fa-stack fa-2x">
                                    <i class="fa fa-circle-thin fa-stack-2x"></i>
                                    <i class="fa fa-male fa-stack-1x"></i>
                                    </span>
                                  </a>
                                  @endif
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>{{$relative->first_name}} {{$relative->last_name}}</b></h4>
                                        <p class="text-dark m-b-5"><b>Relationship: </b> <span class="text-muted">{{$relative->relationship}}</span></p>
                                        <p class="text-dark m-b-5"><b>Race: </b> <span class="text-muted">{{$relative->race}}</span></p>
                                        <p class="text-dark m-b-5"><b>Date of Birth: </b> <span class="text-muted">{{$relative->dob}}</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-info">Hot</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>

                </div>




                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                2016 © Ubold.
                                
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            @stop
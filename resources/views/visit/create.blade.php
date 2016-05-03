
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
                        <h4 class="page-title">Visit</h4>
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
                                <h3 class="panel-title">COMMUNITY DEVELOPMENT</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                            <label for="first_name">Day Care*</label>
                                            <input type="text" name="first_name" placeholder="First Name" class="form-control" id="first_name" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="last_name">Prepared Meals*</label>
                                            <input type="text" name="last_name" placeholder="Last Name" id="last_name" class="form-control" value="">
                                        </div>
                                    <div class="form-group">
                                            <label for="middle_name">Job Training</label>
                                            <input type="text" name="email" placeholder="Email" class="form-control" id="email" value="">
                                        </div>
                                    <div class="form-group">
                                            <label for="middle_name">Legal Assistance</label>
                                            <input type="text" name="middle_name" placeholder="Middlen Name" class="form-control" id="middle_name" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="maiden_name">Sheltering</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="maiden_name">Transportation</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="maiden_name">Community Event 
Support Type</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="">
                                        </div>
                                        <div class="form-group">
                                            <label for="maiden_name">Community Event 
Support Hour</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="maiden_name">Other Assistance 
(Specify)</label>
                                            <input type="text" name="maiden_name" placeholder="Maiden Name" class="form-control" id="maiden_name" value="">
                                        </div>
                                        
                                        
                                        
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">EMOTIONAL/SPIRITUAL CARE</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    
                                            <label for="address1">Crisis Care</label>
                                            <input type="text" name="address1" class="form-control" placeholder="Address" id="address1" value="">
                                        </div> 
                                        
                                        <div class="form-group">
                                            <label for="address2">Grief Care</label>
                                            <input type="text" name="address2" placeholder="" 
                                            class="form-control" id="address2" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="city">End-of-Life Care</label>
                                            <input type="text" name="city" class="form-control" 
                                            required="" placeholder="City" 
                                            id="city" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="postal_code">Visitation</label>
                                            <input type="text" name="postal_code" placeholder="Postal code" class="form-control" id="postal_code" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="county">Other Care (Specify)</label>
                                            <input type="text" name="county" placeholder="County" id="county" class="form-control" value="">
                                        </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-pink">
                            <div class="panel-heading">
                                <h3 class="panel-title">HOUSEHOLD ASSISTANCE</h3>
                            </div>
                            <div class="panel-body">
                                
                                
                                
                                <div class="form-group">
                                            <label for="id_number">Bedding</label>
                                            <input type="text" name="id_number" placeholder="" class="form-control" id="id_number" value="">
                                        </div>
                                <div class="form-group">
                                            <label for="dob">Clothing</label>
                                            <input type="text" name="dob" placeholder="Date of Birth" class="form-control" id="dob" value="">
                                        </div>
                                
                                <div class="form-group">
                                            <label for="dob">Groceries</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dob">Personal Care Kit</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="">
                                        </div>
                                        
                                        
                                        
                                        <div class="form-group">
                                            <label for="dob">Furniture</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="dob">Home Maintenance</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="dob">Monetary 
Assistance</label>
                                            <input type="text" name="monthly_income" placeholder="" class="form-control" id="monthly_income" value="">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="dob">Other</label>
                                            <textarea name="comment" class="form-control" id="comment"></textarea>
                                        </div>
                                        
                                  <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>         
                                
                            </div>
                        </div>
                    </div>

                </div>
                
                      <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">DISASTER ASSISTANCE</h3>
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
                                        
                                        
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">EDUCATION ASSISTANCE</h3>
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
                                <h3 class="panel-title">HEALTH SERVICES</h3>
                            </div>
                            <div class="panel-body">
                                
                                
                                
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
                
                
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">HEALTH EDUCATION</h3>
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
                                        
                                        
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="panel panel-color panel-purple">
                            <div class="panel-heading">
                                <h3 class="panel-title">OTHER</h3>
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
                                <h3 class="panel-title">HEALTH SERVICES</h3>
                            </div>
                            <div class="panel-body">
                                
                                
                                
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

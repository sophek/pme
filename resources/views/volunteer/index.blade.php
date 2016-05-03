@extends('layouts.pme')

@section('header-script')
        <!-- Custom box -->
        <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
@stop

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
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-sm-8">
                                    <form role="form">
                                        <div class="form-group contact-search m-b-30">
                                            <input type="text" id="search" class="form-control" placeholder="Search...">
                                            <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                        </div> <!-- form-group -->
                                    </form>
                                </div>
                                <div class="col-sm-4">
                                     <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                                                            data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add Volunteer</a>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mails m-0 table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th>Center</th>
                                            <th>Total Count</th>
                                            <th>Total Hours</th>
                                            <th>Expenses Salaray</th>
                                            <th>Expenses Others</th>
                                            <th>Church Income</th>
                                            <th>Corp. Income</th>
                                            <th>Indiv. Income</th>
                                            <th>Income Fees</th>
                                            <th>Income Others</th>
                                            
                                        </tr>
                                    </thead>

                                    <tbody>
                                        
                                       @foreach ($volunteers as $volunteer)                                         
                                        <tr>
                                             <td>
                                                 {{$volunteer->center_id}}
                                            </td>   

                                            <td>
                                                {{$volunteer->total_count}}
                                            </td>

                                            <td>
                                                {{$volunteer->total_hours}}
                                            </td>

                                            <td>
                                                {{$volunteer->total_expenses_salary}}
                                                
                                            </td>
                                            <td>
                                                 {{$volunteer->total_expenses_other}}
                                            </td>
                                            <td>
                                                {{$volunteer->total_income_church}}
                                            </td>
                                           <td>
                                                {{$volunteer->total_income_corp}}
                                            </td>
                                            <td>
                                                {{$volunteer->total_income_individual}}
                                            </td>
                                            <td>
                                                {{$volunteer->total_income_fees}}
                                            </td>
                                            <td>
                                                {{$volunteer->total_income_others}}
                                            </td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {!! $volunteers->links() !!}

                    </div> <!-- end col -->
                    
                    
                    <!-- Modal -->
                <!-- Modal -->
                <div id="custom-modal" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title">Add Customer</h4>
                    <div class="custom-modal-text text-left">
                        <form role="form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label for="position">Contact number</label>
                                <input type="text" class="form-control" id="position" placeholder="Enter number">
                            </div>


                            <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
                        </form>
                    </div>
                </div>

                </div>
@endsection

@section('footer-script')

        <!-- Modal-Effect -->
        <script src="assets/plugins/custombox/dist/custombox.min.js"></script>
        <script src="assets/plugins/custombox/dist/legacy.min.js"></script>
@stop
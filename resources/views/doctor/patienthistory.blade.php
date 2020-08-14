<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Sunayan Eye Care</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
<div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="/index" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Sunayan Eye Care</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>Admin</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/Doctorprofile">My Profile</a>
                        <a class="dropdown-item" href="/editprofile">Edit Profile</a>
                        <a class="dropdown-item" href="/login">Logout</a>
                    </div>
                </li>
            </ul> 
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main Navigation</li>
                        <li >
                            <a href="/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="/Doctorprofile"><i class="fa fa-user-md"></i> <span>Profile</span></a>
                        </li>
						<li class="active">
                            <a href="/patienthistory"><i class="fa fa-user"></i> <span>Patients</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-calendar-check-o"></i><span>Appointments</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="/addappointment">Add Appointments</a></li>
                                <li><a href="/updateappointment">Update Appointments</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/schedule"><i class="fa fa-clock-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        <li >
                            <a href="/payment"><i class="fa fa-money"></i> <span> Payments</span></a>
                        </li>
                        <li>
                            <a href="/calender"><i class="fa fa-calendar"></i> <span>Booking Calender</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-cog"></i><span>Setting</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="/hospitaldetails">Hospital Details</a></li>
                                <li><a href="/accessdetails">Access Details</a></li>
                                <li><a href="/manageusers">Manage Users</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
                <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    <!-- <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="/patientadd" class="btn btn-secondary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
                    </div> -->
                </div>

<!--                 
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <div class="dash-widget-info text-left">
                                <h3>9</h3>
                                <span class="widget-title1">Total Patient Yesterday</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">  
                            <div class="dash-widget-info text-left">
                                <h3>33</h3>
                                <span class="widget-title2">Total Patient Last Week</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <div class="dash-widget-info text-left">
                                <h3>128</h3>
                                <span class="widget-title3">Total Patient Last Month</span>
                                
                            </div>
                        </div>
                    </div>
                </div> -->

        <div class="row filter-row">
            <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                <form action="/patientsearch" method="POST" role="search">
                       {{ csrf_field() }} 
                        <div class="form-group form-focus">
                            <label class="focus-label">Appointment ID</label>
                            <input type="text" class="form-control floating" name="q">
                        </div>
                        
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <button  class="btn btn-success btn-block">Search</button>
                    </div>
                </form>
            </div>
   

                
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-border table-striped custom-table datatable mb-0">
                                <thead>
                                    <tr>
                                        <!-- <th>#</th> -->
                                        <th>Patient ID</th>
                                        <th>Appointment ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Last Visit</th>
                                        <th>Contact</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                          
                                <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <!-- <td>1</td> -->
                                        <td><a href="#">{{ $user->PatientId }}</a></td>
                                        <td>{{ $user->AppointmentId }}</td>
                                        <td>{{ $user->Patient_name }} </td>
                                        <td>{{ $user->Age }}</td>
                                        <td>{{ $user->created_at }} </td>
                                        <td>{{ $user->phone }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <td>2</td>
                                        <td><a href="/patientdetails">#EK546</a></td>
                                        <td>Terry Baker</td>
                                        <td>63</td>
                                        <td>11:00AM, 15th july 2020</td>
                                        <td>8845298172</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>3</td>
                                        <td><a href="/patientdetails">#GJ761</a></td>
                                        <td>Kyle Bowman</td>
                                        <td>15</td>
                                        <td>03:00PM, 15th july 2020</td>
                                        <td>8729012987</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="/patientdetails">#MP209</a></td>                                       
                                        <td>Marie Howard</td>
                                        <td>22</td>
                                        <td>04:00PM, 15th july 2020</td>
                                        <td>9177839820</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><a href="/patientdetails">#GT098</a></td>
                                        <td>Joshua Guzman</td>
                                        <td>34</td>
                                        <td>10:00AM, 16th july 2020</td>
                                        <td>9987612762</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><a href="/patientdetails">#WS205</a></td>
                                        <td>Julia Sims</td>
                                        <td>27</td>
                                        <td>12:00PM, 16th july 2020</td>
                                        <td>88036361638</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><a href="/patientdetails">#TR498</a></td>
                                        <td>Linda Carpenter</td>
                                        <td>24</td>
                                        <td>01:00PM, 16th july 2020</td>
                                        <td>88293756382</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Melissa Burton</td>
                                        <td>35</td>
                                        <td>10:00AM, 17th july 2020</td>
                                        <td>76291028365</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Patrick Knight</td>
                                        <td>21</td>
                                        <td>02:00PM, 18th july 2020</td>
                                        <td>0177829365</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Denise Stevens</td>
                                        <td>7</td>
                                        <td>10:00AM, 19th july 2020</td>
                                        <td>2738193847</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Judy Clark</td>
                                        <td>22</td>
                                        <td>12:00AM, 19th july 2020</td>
                                        <td>87464749818</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Details</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Dennis Salazar</td>
                                        <td>34</td>
                                        <td>01:00PM, 19th july 2020</td>
                                        <td>4273819283</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Details</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Charles Ortega</td>
                                        <td>32</td>
                                        <td>02:00PM, 19th july 2020</td>
                                        <td>1298292837</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td><a href="/patientdetails">#JK238</a></td>
                                        <td>Sandra Mendez</td>
                                        <td>24</td>
                                        <td>03:00PM, 19th july 2020</td>
                                        <td>812387898</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/patientdetails"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                  
                                </tbody>
                               
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_patient" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="assets/img/sent.png" alt="" width="50" height="46">
                        <h3>Are you sure want to delete this Patient?</h3>
                        <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


</html>
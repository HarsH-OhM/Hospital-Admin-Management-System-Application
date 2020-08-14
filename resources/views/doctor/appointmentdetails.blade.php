<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Sunayan Eye Care</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

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
                        <li>
                            <a href="/index"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li>
                            <a href="/Doctorprofile"><i class="fa fa-user-md"></i> <span>Profile</span></a>
                        </li>
						<li>
                            <a href="/patienthistory"><i class="fa fa-user"></i> <span>Patients</span></a>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fa fa-calendar-check-o"></i><span>Appointments</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="/addappointment">Add Appointments</a></li>
                                <li class="active"><a href="/updateappointment">Update Appointments</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/schedule"><i class="fa fa-clock-o"></i> <span>Doctor Schedule</span></a>
                        </li>
                        <li>
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
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Appointment Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                        @if(isset($details))
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="personal-info">
                                    @foreach($details as $user)
                                        <li>
                                            <span class="title">Patient Name:</span>
                                            <!-- <span class="text">Robert Daniels</span> -->
                                            <td>{{$user->Patient_name}}</td> 
                                        </li>

                                        <li>
                                            <span class="title">Gender:</span>
                                            <!-- <span class="text">Male</span> -->
                                            <td>{{$user->gender}}</td>
                                        </li>
                                        <li>
                                            <span class="title">Age:</span>
                                            <span class="text">{{$user->Age}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Phone:</span>
                                            <!-- <span class="text">88888888</span> -->
                                            <td>{{$user->phone}}</td>
                                        </li>
                                        <li>
                                        
                                            <span class="title">Email:</span>
                                            <td>{{$user->email}}</td>
                                            <!-- <span class="text"><{{$user->gender}}</span> -->
                                            
                                        </li>

                                        <li>
                                            <span class="title">Address:</span>
                                            <span class="text">{{$user->Address}}</span>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Patient ID:</span>
                                            <span class="text">{{$user->PatientId}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Height</span>
                                            <span class="text">{{$user->Height}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Weight</span>
                                            <span class="text">{{$user->Weight}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Appointment ID:</span>
                                            <span class="text">{{$user->AppointmentId}}</span>
                                        </li>
                                        <li>
                                            <span class="title">Appointment Date:</span>
                                            <!-- <span class="text">11th May, 2020</span> -->
                                            <td>{{$user->date}}</td>
                                        </li>
                                        <li>
                                            <span class="title">Appointment Time:</span>
                                            <!-- <span class="text">11:30 AM</span> -->
                                            <td>{{$user->time}}</td>
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="content">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2> Appointment details</h2>
   
    <table class="table table-striped custom-table">
        <thead>
            <tr>
            <th>Send Email</th>
                <th>PatientId</th>
                <th>AppointmentId</th>
                <th>Type</th>
                <th>Patient Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Doctor Name</th>
                <th>Reason</th>
                <th>Date</th>
                <th>Time</th>
                <th>Note</th>
                
            </tr>
        </thead>
        <tbody>
        <form  id ="check" method="post" action="{{ url('amail') }}">
      @csrf
            @foreach($details as $user)
            <tr>
            <td><button type="submit-btn"   data-id='4'>send</button></td>
                <td>{{$user->PatientId}}
                <input type="hidden" name="pid" value="{{$user->PatientId}}" /></td>
                <td>{{$user->AppointmentId}}
                <input type="hidden" name="aid" value="{{$user->AppointmentId}}" /></td>
                <td>{{$user->atype}}
                <input type="hidden" name="atype" value="{{$user->atype}}" /></td>
                <td>{{$user->Patient_name}}
                <input type="hidden" name="pname" value="{{$user->Patient_name}}" /></td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->Doctor_name}}
                <input type="hidden" name="dname" value="{{$user->Doctor_name}}" /></td>
                <td>{{$user->Reason}}
                <input type="hidden" name="reason" value="{{$user->Reason}}" /></td>
                <td>{{$user->date}}
                <input type="hidden" name="date" value="{{$user->date}}" /></td>
                <td>{{$user->time}}
                <input type="hidden" name="time" value="{{$user->time}}" /></td>
                <td>{{$user->note}}</td>
                
            </tr>

            @endforeach
            </form>
        </tbody>
    </table>
    @endif
    </form>
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
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
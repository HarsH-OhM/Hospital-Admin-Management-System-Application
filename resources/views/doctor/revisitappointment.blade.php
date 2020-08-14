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
                                <li class="active"><a href="/addappointment">Add Appointments</a></li>
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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add New Appointment for Old Patient</h4>
                    </div>
                    
                </div>

            <div class="row">
                @if(isset($details))
                    <div class="col-lg-8 offset-lg-2">
                    
                    @foreach ($details as $user)
                        <!-- <form method="POST" action="{{url('storedetails')}}"> -->
                        <form method="post" action="{{ url('storeP')}}">
                            @csrf

                            <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                                    
                                    <label>Appointment Type<span class="text-danger">*</span></label>
                                    <select class="select" name="atype">
                                        <!-- <option>Select</option> -->
                                        <option>Revisit</option>
                                        <option>Fresh</option>
                                        
                                    </select>
                                </div>
                                </div>
                                
                                </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient ID<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="pid" value="{{$user->PatientId}}" readonly>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">
                                <div class="form-group">
                                        <label>Appointment ID<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="aid" value="SIC-A" readonly>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Patient Name<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="pname" value="{{$user->Patient_name}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Age<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="age" value="{{$user->Age}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" value="{{$user->email}}"required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <input class="form-control" type="text" name="phone"  value="{{$user->phone}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Birth</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="dob"  value="{{$user->dob}}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <input class="form-control" type="text" name="gender"  value="{{$user->gender}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Height</label>
                                        <input class="form-control" type="text" name="height" value="{{$user->Height}}"required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Weight</label>
                                        <input class="form-control" type="text" name="weight"  value="{{$user->Weight}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input class="form-control" type="text" name="address"  value="{{$user->Address}}" required>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input class="form-control" type="text" name="country"  value="{{$user->country}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control" type="text" name="city"  value="{{$user->city}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input class="form-control" type="text" name="state"  value="{{$user->state}}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input class="form-control" type="text" name="postalcode"  value="{{$user->postalcode}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Doctor Name<span class="text-danger">*</span></label>
                                        <select class="select" name="dname">
                                            <option>Select</option>
                                            <option>Dr. Sunayan</option>
                                            <option>Dr. Sunyan2.0</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Reason<span class="text-danger">*</span></label>
                                        <select class="select" name="reason">
                                            <option>Select</option>
                                            <option>CheckUp</option>
                                            <option>Ratina</option>
                                            <option>Surgery</option>
                                            <option>Cornea</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Appointment Date</label>
                                        <div class="cal-icon">
                                            <input type="text" class="form-control datetimepicker" name="date" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Appointment Time</label>
                                        <div class="time-icon">
                                            <input type="text" class="form-control" id="datetimepicker3" name="time" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Note</label>
                                <textarea cols="30" rows="4" class="form-control" name="note"></textarea>
                            </div>
                            <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Schedule Status<span class="text-danger">*</span></label>
                                        <select class="select" name="status">
                                            <option>Select</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-secondary submit-btn">Book Appointment</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    @endif
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
    <script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'

                });
            });
     </script>
</body>
</html>
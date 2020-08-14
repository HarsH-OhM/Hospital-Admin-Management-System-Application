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
                    <div class="col-sm-5 col-4">
                        <h4 class="page-title">Patient Details</h4>
                    </div>
                    <div class="col-sm-7 col-8 text-right m-b-30">
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-white">CSV</button>
                            <button class="btn btn-white">PDF</button>
                            <button class="btn btn-white"><i class="fa fa-print fa-lg"></i> Print</button>
                        </div>
                    </div>
                </div>

                <page size="A4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="payslip-title">Patient Details</h4>
                            <div class="row">
                                <div class="col-sm-6 m-b-20">
                               
                                    <img src="assets/img/logo-dark.png" class="inv-logo" alt="">
                                    @if(isset($hos))
                                    @foreach($hos as $hinfo)
                                    <ul class="list-unstyled mb-0">
                                        <li>{{ $hinfo->HospitalName}}</li>
                                        <li>{{ $hinfo->Address}}</li>
                                        <li>{{ $hinfo->City}} {{ $hinfo->State}} {{ $hinfo->PostalCode}}</li>
                                    </ul>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="col-sm-6 m-b-20">
                                    <div class="invoice-details">
                                        <h3 class="text-uppercase">#49029</h3>
                                        <ul class="list-unstyled">
                                            <li>Date: <span>18 July, 2018</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            @if(isset($docto))
                                <div class="col-lg-12 m-b-20">
                                @foreach($docto as $doc)
                                    <ul class="list-unstyled">
                                        <li>
                                        <h5 class="mb-0"><strong>{{$doc->First_name}} {{$doc->Last_name}}</strong></h5></li>
                                        <li>Eye Specilist</li>
                                        <li>{{$doc->Degree}}</li>
                                    </ul>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <h5 class="mb-0"><strong>Patients Details:</strong></h5><br>
                            <div class="row">
                            @if(isset($details))
                                <div class="col-md-12">
                                    <div class="profile-view">
                                        <div class="profile-img-wrap">
                                        @foreach($details as $user)
                                            <div class="profile-img">
                                                <a href="#"><img class="avatar" src="assets/img/placeholder.jpg" alt=""></a>
                                            </div>
                                         </div>
                                         <div class="profile-basic">
                                            <div class="row">
                                          
                                                <div class="col-md-6">
                                                    <div class="profile-info-left">
                                                   
                                                        <ul class="personal-info">
                                                            <li>
                                                                <span class="title">Name:</span>
                                                                <span class="text">{{ $user->Patient_name}}</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Patient ID:</span>
                                                                <span class="text">{{ $user->PatientId}}</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Birthday:</span>
                                                                <span class="text">{{ $user->dob}}</span>
                                                            </li>
                                                            <li>
                                                                <span class="title">Gender:</span>
                                                                <span class="text">{{ $user->gender}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="personal-info">
                                                        <li>
                                                            <span class="title">Height:</span>
                                                            <span class="text">{{ $user->Height}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Weight:</span>
                                                            <span class="text">{{ $user->Weight}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Phone:</span>
                                                            <span class="text">{{ $user->phone}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Email:</span>
                                                            <span class="text">{{ $user->email}}</span>
                                                        </li>
                                                            <li>
                                                                <span class="title">Address:</span>
                                                                <span class="text">{{ $user->Address}}</span>
                                                            </li> 
                                                    </ul>
                                                    <br><br><br><br><br>
                                                   
                                                    
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>                        
                                </div>
                                @endif
                            </div>
                           <!-- <br>
                            <h5 class="mb-0"><strong>Prescriptions Details:</strong></h5><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="personal-info">
                                        <li>Appointment Reason:</li>
                                        <br>
                                        <li>Treatment Taken Before:</li>
                                        <br>
                                        <li>Prescribed Medicine:</li><br>
                                    </ul>
                                </div>
                            </div>-->
                            <br>
                            <h5 class="mb-0"><strong>Appointment Details:</strong></h5><br>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="table-responsive">
                                    @foreach($details as $user)
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Patient ID</th>
                                                    <th>Appointment ID</th>
                                                    <th>Name</th>
                                                    <th>Appointment Date</th>
                                                    <th>Reason</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ $user->PatientId}}</td>
                                                    <td>{{ $user->AppointmentId}}</td>
                                                    <td>{{ $user->Patient_name}}</td>
                                                    <td>{{ $user->date}}</td>
                                                    <td>{{ $user->Reason}}</td>
                                                </tr>
                                                <!-- <tr>
                                                    <td>#AP977</td>
                                                    <td>#YST384798</td>
                                                    <td>Robert Daniels</td>
                                                    <td>22 Dec 2018</td>
                                                    <td>Checkup</td>
                                                </tr>
                                                <tr>
                                                    <td>#AP977</td>
                                                    <td>#YST384798</td>
                                                    <td>Robert Daniels</td>
                                                    <td>22 Dec 2018</td>
                                                    <td>Surgery</td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </page>
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
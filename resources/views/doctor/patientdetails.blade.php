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
                    <div class="col-sm-7 col-7">
                        <h4 class="page-title">Patient Details</h4>
                    </div>
                    
        
           
                    <div class="col-sm-5 col-5 text-right m-b-30">
                    @if(isset($details))
                @foreach ($details as $user)
             
                <form action="/patientsearch2" method="POST" role="search">
                       {{ csrf_field() }}
                      
                       <div>
                       <input type="hidden" class="form-control floating" name="q" value="{{ $user->AppointmentId}}">
                       <button class="btn btn-secondary btn-rounded">Print Details</button>

                        </div>
                    
                </form>
           
            @endforeach
            @endif
                       </div> 
                  
                </div>
               
               <div class="card-box profile-header">
                
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="assets/img/placeholder.jpg" alt=""></a>
                                    </div>
                                </div>
                                
                                <div class="profile-basic">
                                
                                @if(isset($details))
                                    <div class="row">
                                    @foreach ($details as $user)
                                    
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                            <br>
                                                <h3 class="user-name m-t-0 mb-0">{{ $user->Patient_name }} </h3><br>
                                              
                                                <ul class="personal-info">
                                                    <li>
                                                        <span class="title">Patient ID:</span>
                                                        <span class="text">{{ $user->PatientId }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Birthday:</span>
                                                        <span class="text">{{ $user->dob }}</span>
                                                    </li>
                                                    <li>
                                                        <span class="title">Gender:</span>
                                                        <span class="text">{{ $user->gender }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                        
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text">{{ $user->phone }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text">{{ $user->email }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text">{{ $user->Address }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Height</span>
                                                    <span class="text">{{ $user->Height }}</span>
                                                </li>
                                                <li>
                                                    <span class="title">Weight</span>
                                                    <span class="text">{{ $user->Weight }}</span>
                                                </li>
                                            </ul>
                                            @endforeach
                                            
                                        </div>

                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                @endif

                            </div>  
                        </div>                      
                    </div>
                

                   

                    <br>   
                    <h5 class="mb-0"><strong>Appointment Details:</strong></h5><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Appointment ID<span class="text-danger">*</span></label>
                            <select class="select">
                                <!-- <option>Select</option>
                                <option>#YTF327888</option>
                                <option>#YST384798</option>
                                <option>#BH873661</option> -->
                                @foreach($details as $user)
                        <option value="{{$user->AppointmentId}}">
                            {{$user->AppointmentId}}
                        </option>
                    @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="personal-info">
                                <li>
                                    <span class="title">Appointment Date:</span>
                                    <span class="text">{{$user->date}}</span>
                                </li>
                                <li>
                                    <span class="title">Reson of visit:</span>
                                    <span class="text">{{$user->Reason}}</span>
                                </li>
                                <li>
                                    <span class="title">Note:</span>
                                    <span><textarea cols="30" rows="4" class="form-control"></textarea></span>
                                </li>
                            </ul>
                        </div>
                    </div>

                            <br>     <br><br><br>
                            <h5 class="mb-0"><strong>Payment Details:</strong></h5></li><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Patient ID</th>
                                                    <th>Appointment ID</th>
                                                    <th>Name</th>
                                                    <th>Appointment Date</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{$user->PatientId}}</td>
                                                    <td>{{$user->AppointmentId}}</td>
                                                    <td>{{$user->Patient_name}}</td>
                                                    <td>{{$user->date}}</td>

                                     @if(isset($inv))
                                    @foreach($inv as $invd)
                                                    <td>{{$invd->Grand_total}}</td>
                                                    @endforeach
                                                    @endif
                                                </tr>
                                                <!-- <tr>
                                                    <td>#AP977</td>
                                                    <td>#YST384798</td>
                                                    <td>Robert Daniels</td>
                                                    <td>22 Dec 2018</td>
                                                    <td>$4000</td>
                                                </tr>
                                                <tr>
                                                    <td>#AP977</td>
                                                    <td>#BH873661</td>
                                                    <td>Robert Daniels</td>
                                                    <td>30 Dec 2018</td>
                                                    <td>$4000</td>
                                                </tr> -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
</div>
                            <!-- <br>
                            <h5 class="mb-0"><strong>Patient Details:</strong></h5></li><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table">
                                            <thead>
                                                <tr>
                                                <td >Patient Name</td>
                                               
                                                <td>PatientId</td>
                                                <td>Email</td>
                                                <td>dob</td>
                                                <td>Phone</td>
                                                <td>Date</td>
                                                <td>Gender</td>
                                               
                                                <td>ReasonOfVisit</td>
                                                 <td>Note</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($details as $user)
                                                <tr>
                                              
<td>{{ $user->Patient_name }}</td>

<td>{{ $user->PatientId }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->dob }}</td>
<td>{{ $user->phone }}</td>
<td>{{ $user->date }}</td>
<td>{{ $user->gender }}</td>
<td>{{ $user->Reason }}</td>
<td>{{ $user->note }}</td>

                                                </tr>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
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
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
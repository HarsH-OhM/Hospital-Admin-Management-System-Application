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
                        @if(Auth::user())
                        <a class="dropdown-item" href="{{ url('logout')}}">Logout</a>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                        @endif
                    </div>
                </li>
            </ul> 
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main Navigation</li>
                        <li class="active">
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
                                <li><a href="/updateappointment">Update Appointments</a></li>
                            </ul>
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
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card member-panel">
                            <div class="card-header table-white">
                                <h4 class="card-title d-inline-block">Scheduled Patients List </h4>
                                <a href="#" class="btn btn-secondary btn-rounded float-right">Save Changes</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table mb-0 new-patient-table">
                                        <tbody>
                                            <tr>
                                                <th>Patient Name</th>
                                                <th>Appointment ID</th>
                                                <th>Time</th>
                                                <th>Reason</th>
                                                <th>Status</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>John Doe</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>11:00AM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-one ">Surgery</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Richard</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>01:30PM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-two ">Checkup</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Villiam</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>02:00PM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-three ">Cornea</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>Martin</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>04:00PM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-four">Ratina</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>John Doe</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>11:00AM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-one ">Surgery</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>John Doe</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>11:00AM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-one ">Surgery</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>John Doe</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>11:00AM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-one ">Surgery</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h2>John Doe</h2>
                                                </td>
                                                <td>#2345GT67JK</td>
                                                <td>11:00AM, 15-Jun-2020</td>
                                                <td><button class="btn btn-primary btn-primary-one ">Surgery</button></td>
                                                <td><input type="checkbox" id="checkbox" name="status-checkbox" value="status"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <div class="dash-widget-info text-left">
                                <h3>37</h3>
                                <span class="widget-title1">New Patient<i class="fa fa-check" aria-hidden="true"></i></span>
                                <canvas id="new-chart" width="200" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">  
                            <div class="dash-widget-info text-left">
                                <h3>65,000</h3>
                                <span class="widget-title2">Transaction<i class="fa fa-check" aria-hidden="true"></i></span>
                                <canvas id="pay-chart" width="200" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget">
                            <div class="dash-widget-info text-left">
                                <h3>12</h3>
                                <span class="widget-title3">Revenue <i class="fa fa-check" aria-hidden="true"></i></span>
                                <canvas id="renew-chart" width="200" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-title">
                                    <h4>Total Progress</h4>
                                    <span class="float-right">
                                        <ul class="chat-user-total">
                                            <li><i class="fa fa-circle current-users" aria-hidden="true"></i>Patient</li>
                                            <li><i class="fa fa-circle old-users" aria-hidden="true"></i>Appointment</li>
                                        </ul>
                                    </span>
                                </div>  
                                <canvas id="bargraph"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                        <div class="card member-panel">
                            <div class="card-header bg-white">
                                <h4 class="card-title mb-0">Notifications</h4>
                            </div>
                            <div class="card-body">     
                            </div>
                            <div class="card-footer text-center bg-white">
                                <a href="/doctors" class="text-muted">View all Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-title">
                                    <h4>Appointment Total </h4>
                                    <span class="float-right">
                                        <ul class="chat-user-total">
                                            <li><i class="fa fa-circle revisit" aria-hidden="true"></i>Revisit</li>
                                            <li><i class="fa fa-circle fresh" aria-hidden="true"></i>Fresh</li>
                                        </ul>
                                    </span>
                                </div>  
                                <canvas id="linegraph"></canvas>
                            </div>
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
    <script src="assets/js/Chart.bundle.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
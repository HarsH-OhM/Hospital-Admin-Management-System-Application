
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
                                <li><a href="/updateappointment">Update Appointments</a></li>
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
                                <li class="active"><a href="/accessdetails">Access Details</a></li>
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
                    <div class="col-sm-8">
                        <h4 class="page-title">Access Details</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">
                        <a href="add-role.html" class="btn btn-secondary btn-block"><i class="fa fa-plus"></i> Add Roles</a>
                        <br>
                        <div class="roles-menu">
                            <ul>
                                <li class="active">
                                    <a href="javascript:void(0);">Administrator</a>
                                    <span class="role-action">
                                        <a href="#" data-toggle="modal" data-target="#delete_role">
                                            <span class="action-circle large delete-btn">
                                                <i class="material-icons">delete</i>
                                            </span>
                                        </a>
                                    </span>
                                </li>
                                <li><a href="#">Doctor</a></li>
                                <li><a href="#">Receptionist</a></li>
                                <li><a href="#">Nurse</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
                        <h6 class="card-title m-b-20">Module Access</h6>
                        <div class="m-b-30">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    Dashboard
                                    <div class="material-switch float-right">
                                        <input id="dashboard_module" type="checkbox">
                                        <label for="dashboard_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Profile
                                    <div class="material-switch float-right">
                                        <input id="profile_module" type="checkbox">
                                        <label for="profile_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Patient
                                    <div class="material-switch float-right">
                                        <input id="patient_module" type="checkbox">
                                        <label for="patient_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Appointment
                                    <div class="material-switch float-right">
                                        <input id="appointment_module" type="checkbox">
                                        <label for="appointment_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Payment
                                    <div class="material-switch float-right">
                                        <input id="payment_module" type="checkbox">
                                        <label for="payment_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Booking Calendar
                                    <div class="material-switch float-right">
                                        <input id="calendar_module" type="checkbox">
                                        <label for="calendar_module" class="badge-success"></label>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Setting
                                    <div class="material-switch float-right">
                                        <input id="setting_module" type="checkbox">
                                        <label for="setting_module" class="badge-success"></label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Appointment</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Payment</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Booking Calendar</td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                        <td class="text-center">
                                            <input type="checkbox" checked="">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    <script src="assets/js/app.js"></script>
</body>
</html>
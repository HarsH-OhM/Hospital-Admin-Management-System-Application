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
                                <li ><a href="/accessdetails">Access Details</a></li>
                                <li class="active"><a href="/manageusers">Manage Users</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-6 col-6">
                        <h4 class="page-title">Manage Users</h4>
                    </div>

                    <div class="col-sm-6 col-6 text-right m-b-30">
                        <a href="/adduser" class="btn btn-secondary btn-rounded"><i class="fa fa-plus"></i> Add User</a>
                    </div>
                </div>
                <div class="row filter-row">
                     <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <form action="/Usersearch" method="POST" role="search">
                       {{ csrf_field() }} 
                        <div class="form-group form-focus">
                            <label class="focus-label">Profile ID</label>
                            <input type="text" class="form-control floating" name="q">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <button type="submit" class="btn btn-success btn-block">Search</button>                                                   
                </div>
            </form>
            </div>
        </div>

        <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table" >
                                <thead>
                                    <tr>
                                        <th>Profile ID</th>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Occupation</th>
                                        <th>Join Date</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                        <!-- <th>Delete Feature</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->ProfileID}}</td>
                                        <td>{{$user->EmployeeID}}</td>
                                        <td>{{$user->fname}} {{$user->lname}}</td>
                                        <td>{{$user->Age}}</td>
                                        <td>{{$user->Occupation}}</td>
                                        <td>{{$user->Join_date}}</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-red dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Deactive</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Active</a>
                                                    <a class="dropdown-item" href="#">Deactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
<!-- 
                                        <td>
      <input type="button" value="Delete Row" onclick="SomeDeleteRowFunction(this);">
    </td> -->
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <td>#AP977</td>
                                        <td>#YTF327888</td>
                                        <td>Robert Daniels</td>
                                        <td>32</td>
                                        <td>Doctor</td>
                                        <td>30 Dec 2018</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Active</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Active</a>
                                                    <a class="dropdown-item" href="#">Deactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="userdetails.html"><i class="fa fa-pencil m-r-5"></i>Detail</a>
                                                    <a class="dropdown-item" href="userdetails.html" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i>Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#AP977</td>
                                        <td>#YTF327888</td>
                                        <td>Robert Daniels</td>
                                        <td>32</td>
                                        <td>Receptionist</td>
                                        <td>30 Dec 2018</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-red dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Deactive</a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Active</a>
                                                    <a class="dropdown-item" href="#">Deactive</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="userdetails.html"><i class="fa fa-pencil m-r-5"></i>Detail</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
            <div id="delete_appointment" class="modal fade delete-modal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <img src="assets/img/sent.png" alt="" width="50" height="46">
                            <h3>Are you sure want to delete this Appointment?</h3>
                            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 

            <!-- <br>

            <div class="content">
            
    <h5 class="mb-0"><strong>Users Details:</strong></h5></li><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
     <table class="table table-striped custom-table">
        <thead>
            <tr>
                <th>Occupation</th>
                <th>Profile ID</th>
                <th>EmployeeID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>DOB</th>
                <th>Gender</th>
                <th>Alt. Email</th>
                <th>Phone</th>
               
            </tr>
                </thead>
                    <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->Occupation}}</td>
                <td>{{$user->ProfileID}}</td>
                <td>{{$user->EmployeeID}}</td>
                <td>{{$user->fname}}</td>
                <td>{{$user->lname}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->alt_email}}</td>
                <td>{{$user->phone}}</td>
              
            @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

</div> -->
        
      
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

    //         function SomeDeleteRowFunction(btndel) {
    // if (typeof(btndel) == "object") {
    //     $(btndel).closest("tr").remove();
    // } else {
    //     return false;

    function SomeDeleteRowFunction(o) {
     //no clue what to put here?
     var p=o.parentNode.parentNode;
         p.parentNode.removeChild(p);
    // document.getElementById("myTable").deleteRow(0);
    
    }

     </script>
</body>
</html>
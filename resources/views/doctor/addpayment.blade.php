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
    <link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">
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
                        <li >
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
                        <li class="active" >
                            <a href="/payment"><i class="fa fa-money"></i> <span> Payments</span></a>
                        </li>
                        <li>
                            <a href="/calender"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
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

            <div class="col-lg-8 offset-lg-2">

<form action="/dinvoice" method="POST" >
   {{ csrf_field() }} 
   <!-- <p><strong>NOTE:-</strong> Use this searchbar to Book appointment for old patient.</p> -->
    <div class="form-group form-focus">
   
        <label class="focus-label">Appointment id</label>
        <input type="text" class="form-control floating" name="q">
    </div>

    <button type="submit" class="btn btn-success btn-block">Fetch Details

</button>
</div>
 </form>

 </div>

 @if(isset($details))
 <div class="content">

                <div class="row">
                
                    <div class="col-sm-12">
                        <h4 class="page-title">Create Invoice</h4>
                    </div>
                </div>
                
                <div class="row">
                
                    <div class="col-sm-12">
                    @foreach( $details as $dinv)
                        <form method="POST" action="{{ url('invoicedetails')}}">
                         @csrf
                         <div class="row">
                         <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Appointment Id</label>
                                        <input class="form-control" type="text" name="aid"  value="{{ $dinv->AppointmentId}}" readonly required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Patient Name</label>
                                        <input class="form-control" type="text" name="pname"  value="{{ $dinv->Patient_name}}" required>
                                    </div>
                                </div>
                                </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Patient ID<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="pid"  value="{{ $dinv->PatientId}}"  readonly required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Department <span class="text-danger">*</span></label>
                                        <select class="select" name="department">
                                            <option>Select Department</option>
                                            <option>Eyes Specialist</option>
                                            <option>Neurology</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email" name="email" value="{{ $dinv->email}}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Tax</label>
                                        <select class="select" name="tax">
                                            <option>Select Tax</option>
                                            <option>VAT</option>
                                            <option>GST</option>
                                            <option>No Tax</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Patient Address</label>
                                        <textarea class="form-control" rows="3" name="paddress"   required>{{ $dinv->Address}},{{ $dinv->country}},{{ $dinv->city}},{{ $dinv->state}},{{ $dinv->postalcode}}</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Billing Address</label>
                                        <textarea class="form-control" rows="3" name="baddress" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Invoice date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" name="idate" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Due Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" name="ddate" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px">#</th>
                                                    <th class="col-sm-2">Item</th>
                                                    <th class="col-md-6">Description</th>
                                                    <th style="width:100px;">Unit Cost</th>
                                                    <th style="width:80px;">Qty</th>
                                                    <th>Amount</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px" name="item">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px" name="description">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:100px" type="text" name="ucost">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:80px" type="text" name="qty">
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-amt"  style="width:120px" type="text" name="amount">
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px" name="item">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" style="min-width:150px" name="description">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:100px" type="text" name="ucost">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:80px" type="text" name="qty">
                                                    </td>
                                                    <td>
                                                        <input class="form-control form-amt" style="width:120px" type="text" name="amount">
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="text-right">Total</td>
                                                    <!-- <td style="text-align: right; padding-right: 30px;width: 230px">0</td> -->
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                        <input class="form-control text-right form-amt" value="0"  type="text" name="total">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">Tax</td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                        <input class="form-control text-right form-amt" value="0"  type="text" name="tamount">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" class="text-right">
                                                        Discount %
                                                    </td>
                                                    <td style="text-align: right; padding-right: 30px;width: 230px">
                                                        <input class="form-control text-right" type="text" name="discount">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="text-align: right; font-weight: bold">
                                                        Grand Total
                                                    </td>
                                                    <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                                    <input class="form-control text-right" type="text" name="gtotal">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Other Information</label>
                                                <textarea class="form-control" name="oinfo"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center m-t-20">
                                <button class="btn btn-grey submit-btn">Save</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    
                  
                </div>
                @endif
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
    <script src="assets/js/jquery-ui.min.html"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/jquery.fullcalendar.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
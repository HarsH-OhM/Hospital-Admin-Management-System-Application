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
						<li>
                            <a href="/patienthistory"><i class="fa fa-user"></i> <span>Patients</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-calendar-check-o"></i><span>Appointments</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="/addappointment">Add Appointments</a></li>
                                <li><a class="active" href="/updateappointment">Update Appointments</a></li>
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                     <form action="/search" method="POST" role="search">
                       {{ csrf_field() }} 
                        <div class="form-group form-focus">
                            <label class="focus-label">Appointment ID</label>
                            <input type="text" class="form-control floating" name="q">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <button type="submit" class="btn btn-success btn-block">Search
                   <!-- <a  class="btn btn-success btn-block">Search</a> -->
                    </button>
                    </div>
                     </form>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Patient ID</th>
                                        <th>Appointment ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Doctor Name</th>
                                        <th>Appointment Date</th>
                                        <th>Appointment Time</th>
                                        <!-- <th>Status</th> -->
                                        <th>Type</th>
                                        <th>Approval</th>
                                        <!-- <th>Delete</th> -->
                                        <th class="text-right">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- <form  id ="check" method="post" action="{{ url('amai') }}">
                                @csrf -->
                                @foreach($users as $user)
                                    <tr>
                                  
                                        <td class="nr">{{$user->PatientId}}
                            
                                        </td>
                                        <td class="nr">{{$user->AppointmentId}}
                                       
                                        </td>
                                        <td class="nr">{{$user->Patient_name}}
                                       </td>
                                        <td class="nr">{{$user->Age}}
                                        </td>
                                        <td class="nr">{{$user->Doctor_name}}
                                        </td>
                                        <td class="nr">{{$user->date}}
                                        </td>
                                        <td class="nr">{{$user->time}}
                                        </td>
                                        <!-- <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    New
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">New</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Declined</a>
                                                </div>
                                            </div>
                                        </td> -->
                                       
        <!-- <td><button class="btn" id="gid" onclick="tgPanel(this);" >dsee</button></td> -->
                                        <td class="nr">{{$user->atype}}
                                        </td>

                                        
                                        <form action="/Asearch" method="POST" role="search">
                                       {{ csrf_field() }} 
                                       <td class="nr">
                                        <input type="hidden" name="q" value="{{ $user->AppointmentId }}" />
                                        <button type="submit" class="btn btn-success btn-block" id="myButton1" onclick="replaceButtonText('myButton1', 'Approved');">Approve</button>
                                        </td>

                                        </form>
                                        
                                        
                                        <!-- <td><button type="submit-btn"  data-id='4' class="myButton1">send</button></td> -->
<!-- <td><button class="use-address">Reserve</button></td> -->
                                        <!-- <td><a href = 'delete/{{ $user->id }}'>Delete</a></td> -->
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/appointmentdetails"><i class="fa fa-pencil m-r-5"></i> Details</a>
                                                    <a class="dropdown-item" href='#' data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                      
                                    </tr>
                                    @endforeach
                                    <!-- </form> -->
                                   
                                    <!-- <tr>
                                        <td>#AP977</td>
                                        <td>#YTF327888</td>
                                        <td>Robert Daniels</td>
                                        <td>32</td>
                                        <td>Joe Stevens</td>
                                        <td>30 Dec 2018</td>
                                        <td>10:00am - 11:00am</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-green dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Approved
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">New</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Fresh</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/appointmentdetails"><i class="fa fa-pencil m-r-5"></i>Print</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                    <!-- <tr>
                                        <td>#AP977</td>
                                        <td>#YTF327888</td>
                                        <td>Robert Daniels</td>
                                        <td>32</td>
                                        <td>Joe Stevens</td>
                                        <td>30 Dec 2018</td>
                                        <td>10:00am - 11:00am</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-red dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    Declined
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">New</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Declined</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Revisit</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/appointmentdetails"><i class="fa fa-pencil m-r-5"></i>Print</a>
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

            <br>

<!-- //appointment portal details -->


<div class="content">
<h2>appointment booking details from appointment portal.</h2>
<div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Patient ID</th>
                                        <th>Appointment ID</th>
                                        <th>Name</th>
                                        <!-- <th>Age</th>
                                        <th>Doctor Name</th> -->
                                        <th>Appointment Date</th>
                                        <th>Appointment Time</th>
                                        <!-- <th>Status</th> -->
                                        <!-- <th>Type</th> -->
                                        <th>Approval</th>
                                        <!-- <th>Delete</th> -->
                                        <th class="text-right">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                <!-- <form  id ="check" method="post" action="{{ url('amai') }}">
                                @csrf -->
                                @foreach($booking as $book)
                                    <tr>
                                  
                                        <td class="nr">{{$book->PatientId}}
                            
                                        </td>
                                        <td class="nr">{{$book->AppointmentId}}
                                       
                                        </td>
                                        <td class="nr">{{$book->name}}
                                       </td>
                                        <!-- <td class="nr">{{$user->Age}}
                                        </td>
                                        <td class="nr">{{$user->Doctor_name}}
                                        </td> -->
                                        <td class="nr">{{$book->Date}}
                                        </td>
                                        <td class="nr">{{$book->time}}
                                        </td>
                                        <!-- <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="custom-badge status-purple dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    New
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">New</a>
                                                    <a class="dropdown-item" href="#">Approved</a>
                                                    <a class="dropdown-item" href="#">Declined</a>
                                                </div>
                                            </div>
                                        </td> -->
                                       
        <!-- <td><button class="btn" id="gid" onclick="tgPanel(this);" >dsee</button></td> -->
                                        
                                  
                                        
                                        <form action="/Bsearch" method="POST" role="search">
                                       {{ csrf_field() }} 
                                       <td class="nr">
                                        <input type="hidden" name="q" value="{{ $book->AppointmentId }}" />
                                        <button type="submit" class="btn btn-success btn-block" id="myButton1" onclick="replaceButtonText('myButton1', 'Approved');">Approve</button>
                                        </td>

                                        </form>
                                        
                                        
                                        <!-- <td><button type="submit-btn"  data-id='4' class="myButton1">send</button></td> -->
<!-- <td><button class="use-address">Reserve</button></td> -->
                                        <!-- <td><a href = 'delete/{{ $user->id }}'>Delete</a></td> -->
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="/appointmentdetails"><i class="fa fa-pencil m-r-5"></i> Details</a>
                                                    <a class="dropdown-item" href='#' data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>

                                      
                                    </tr>
                                    @endforeach
                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>

                    </div>





            <!-- <div class="content">
    <h5 class="mb-0"><strong>Appopintment Details:</strong></h5></li><br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
     <table class="table table-striped custom-table">
        <thead>
            <tr>
                <th>PatientId</th>
                <th>Type</th>
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
        @foreach($users as $user)
            <tr>
                <td>{{$user->PatientId}}</td>
                <td>{{$user->atype}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->dob}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->Doctor_name}}</td>
                <td>{{$user->Reason}}</td>
                <td>{{$user->date}}</td>
                <td>{{$user->time}}</td>
                <td>{{$user->note}}</td>
            </tr>
            @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
 -->


</div>

<!-- <form action="/amail" method="post" >
    {{ csrf_field() }}
    <div class="input-group">
        <input type="email" class="form-control" name="email"
            placeholder="mail"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search">Send</span>
            </button>
        </span>
    </div>
</form> -->

<!-- <a href="amail"><button type="submit-btn">send</button></a> -->
</div>
</div>
      


                                 
    
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/app.js"></script>
        <script>

// $("#myButton1").click(function() // no ';' here
// {
//     var elem = document.getElementById("myButton1");
//     if (elem.value=="Approve") elem.value = "Approved";
//     else elem.value = "Approve";
// }

            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
                $('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });

            function tgPanel(button) {
    var tr = button.parentElement.parentElement;
    alert("we will see what we can do ");
}



$(".use-address").click(function() {
    var $row = $(this).closest("tr");    // Find the row
    var $text = $row.find(".nr").text(); // Find the text
   
 
    // Let's test it out
 
   // alert($text + " ");
    // window.location.href = $(this).data('doctor.manageusers');

    // $.ajax({
    //    type:'get',
    //    url:'exa',
    //    dataType: 'json',
    //    data:'$text',
    //    success:function(data){
    //        $(".email-success-messge").append(data.success).fadeIn(999);

    //    }
    // });

    $.ajax({
              url: 'exa',
              type: "get",
                data: {_token: {{ csrf_token() }}, id: 1},
              //data: {id:data},
               success: function(response){ // What to do if we succeed
              if(data == "success")
            alert(response); 
        }
            });
 });

// $.ajax({
//               url: 'exa',
//               type: "get",
//                 data: {_token: {{ csrf_token() }}, id: 1},
//               //data: {id:data},
//                success: function(response){ // What to do if we succeed
//               if(data == "success")
//             alert(response); 
//         }
//             });


     </script>




<script LANGUAGE="JavaScript">
<!--
function replaceButtonText(buttonId, text)
{
  if (document.getElementById)
  {
    var button=document.getElementById(buttonId);
    if (button)
    {
      if (button.childNodes[0])
      {
        button.childNodes[0].nodeValue=text;
      }
      else if (button.value)
      {
        button.value=text;
      }
      else //if (button.innerHTML)
      {
        button.innerHTML=text;
      }
    }
  }
}
//-->
</script>

</body>
</html>
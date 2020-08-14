
<!-- login.blade.php -->

<head>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<title>Sunayan Eye Care</title>
</head>

<style>

.card-body{
    background-color:gainsboro;
    background-image: url("sitelogo.png");
    /* background-repeat: no-repeat; */
    background-size: auto;
    
    border-color: #02cc9f;
    box-sizing: border-box;
    height: 410px;
    width:100%;
  
 }

 #card{

     width:920px;
     
 }


</style>

@extends('master')




@section('content')
<div class="container mt-3">



    <div class="row" id ="card">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
        
                <div class="card shadow">
                    <div class="car-header pt-2" style="background-color:#02cc9f;">
                        <div class="card-title font-weight-bold text-white text-center">Wellcome to Dashboard</div>
                    </div>

                    <div class="card-body">
                           

                            
            
              <h4 class="card-title"></h4>
              <!-- <img src="sitelogo.png" alt="Avatar" class="avatar"> -->
              <p class="card-text"></p>
              
              <a href="/login" class="btn btn-info" role="button" style="background-color: #02cc9f; margin: 15px;">Sign In as Doctor</a>
              <a href="/login2" class="btn btn-info" role="button" style="background-color: #02cc9f; "> Sign In as Receptionist</a>
            
        

                   
            
                  
                </div>
            
        </div>
    </div>

    
</div>
@endsection
<!-- <!DOCTYPE html>
<html>
<head>
<title>Laravel 5.7 Contact us form example from starch</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body> -->
 

<!------ Include the above in your HEAD tag ---------->

<head>
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<title>Sunayan Eye Care</title>
</head>
@extends('master')




@section('content')
<div class="container mt-3">



    <div class="row" id ="card">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
        
                <div class="card shadow">
                    <div class="car-header pt-2" style="background-color:#02cc9f;">
                        <div class="card-title font-weight-bold text-white text-center">Contact Us</div>
                    </div>

                    <div class="card-body">

                    
<div class="container contact-form" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
            
            <form method="post" action="{{ route('contactus.store') }}">
			    {{ csrf_field() }}
                <!-- <h3>Contact Us</h3> -->
               <div class="row">
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <input type="text" name="name" class="form-control" placeholder="Your Name *"  required />
				 @if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
				 @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control" placeholder="Your Email *"  required />
							 @if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
							 @endif
                        </div>
                        <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                            <input type="tel" name="phone" class="form-control" placeholder="Phone *"  />
							@if ($errors->has('phone'))
										<span class="help-block">
											<strong>{{ $errors->first('phone') }}</strong>
										</span>
							 @endif
                        </div>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                            <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
			     @if ($errors->has('message'))
				<span class="help-block">
				<strong>{{ $errors->first('message') }}</strong>
				</span>
			    @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />
							
                        </div>
                    </div>
                </div>
            </form>
</div>

</div>

</div>
</div>
@endsection
<!-- </body>
</html> -->
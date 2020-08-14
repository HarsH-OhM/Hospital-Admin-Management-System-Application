
<!-- login.blade.php -->

<style>


.card{
    color:#
}


</style>

@extends('master')




@section('content')
<div class="container mt-3">



    <div class="row" id ="card">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
        <form method="post" action="{{ url('password2') }}">
            {{ csrf_field() }} 
                <div class="card shadow">
                    <div class="car-header pt-2" style="background-color:#02cc9f;">
                        <div class="card-title font-weight-bold text-white text-center"> Reset Password As  a Receptionist</div>
                    </div>

                    <div class="card-body">
                            <!-- @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif -->


                        <div class="form-group">
                            <label for="email"> E-mail </label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail" value="{{ old('email') }}"/>
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                        </div>

                        <div class="form-group">
                            <label for="password">New Password </label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" value="{{ old('password') }}"/>
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div>
<!-- 
                        <div class="form-group">
                            <label for="cpassword">Confirm Password </label>
                            <input type="password" name="confirm_password" id="cpassword" class="form-control" placeholder="Confirm Password" value="{{ old('password') }}"/>
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                        </div> -->
                    </div>

                    <div class="card-footer d-inline-block">
                        <button type="submit" class="btn btn-success"> Reset </button>
                        <p class="float-right mt-2"> Don't have an account?  <a href="{{ url('user-registration2')}}" class="text-success"> Register </a> </p>
                    </div>
                    @csrf
                </div>
            </form>
        </div>
    </div>

    
</div>
@endsection
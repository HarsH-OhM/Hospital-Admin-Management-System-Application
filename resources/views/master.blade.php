<!-- master.blade.php -->

<!doctype html>
<html lang="en">
  <head>
    <title> Admin Custom Registration and Login with Session </title>


<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
<title>Admin Portal</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <style>

html, body { height: 100%; }
  
  body {    
    background: url('bg2.jpg') no-repeat center fixed;     
    background-size: cover;
}


.btn {

    background-color:#02cc9f;
}


  </style>
  <body>
  
  <div class="container">
   <header class="row">
       @include('header')
   </header>
 
   <div id="main" class="row">
           @yield('content')
   </div>
 
   <footer class="row">
       @include('footer')
   </footer>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
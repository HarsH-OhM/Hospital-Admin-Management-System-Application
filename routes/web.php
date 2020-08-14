<?php

use App\Hospital;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home page routes
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/reset_password', function () {
    return view('reset_password');
});

Route::get('/reset_password2', function () {
    return view('reset_password2');
});

// Route::get('/registration2', function () {
//     return view('registration2');
// });

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('home');
});


//doctor folder rotes

Route::get('/index', function () {
    return view('doctor.index');
});

Route::get('/accessdetails', function () {
    return view('doctor.accessdetails');
});

Route::get('/addappointment', function () {
    return view('doctor.addappointment');
});

Route::get('/adduser', function () {
    return view('doctor.adduser');
});

Route::get('/appointmentdetails', function () {
    return view('doctor.appointmentdetails');
});

Route::get('/calender', function () {
    return view('doctor.calender');
});

Route::get('/Doctorprofile', function () {
    return view('doctor.Doctorprofile');
});


Route::get('/edit-appointment', function () {
    return view('doctor.edit-appointment');
});


Route::get('/editprofile', function () {
    return view('doctor.editprofile');
});


Route::get('/hospitaldetails', function () {
    return view('doctor.hospitaldetails');
});


Route::get('/manageusers', function () {
    return view('doctor.manageusers');
});

Route::get('/patientadd', function () {
    return view('doctor.patientadd');
});

Route::get('/patientdetails', function () {
    return view('doctor.patientdetails');
});

Route::get('/patienthistory', function () {
    return view('doctor.patienthistory');
});

Route::get('/updateappointment', function () {
    return view('doctor.updateappointment');
});

Route::get('/userdetails', function () {
    return view('doctor.userdetails');
});

Route::get('/payment', function () {
    return view('doctor.payment');
});

Route::get('/patientprint', function () {
    return view('doctor.patientprint');
});

Route::get('/appclone', function () {
    return view('doctor.appclone');
});

Route::get('/addpayment', function () {
    return view('doctor.addpayment');
});

Route::get('/schedule', function () {
    return view('doctor.schedule');
});

Route::get('/schedule-add', function () {
    return view('doctor.schedule-add');
});


Route::get('/edit-dschedule', function () {
    return view('doctor.edit-dschedule');
});

Route::get('/revisitappointment', function () {
    return view('doctor.revisitappointment');
});










//controllers routes
Route::get('user-registration', 'UserController@index');

Route::post('user-store', 'UserController@userPostRegistration');

Route::get('user-login', 'UserController@userLoginIndex');

Route::post('login', 'UserController@userPostLogin');

Route::get('dashboard', 'UserController@dashboard');

Route::get('logout', 'UserController@logout');


//receptionist login   user2
// Route::group(['middleware'=>'User2'], function() {
//     Route::get('/User2/home', 'User2\User2Controller@index2');
// });

// Route::get('/dashboard', 'User2Controller@dashboard')->name('User2')->middleware('RedirectifnotUser2');


Route::get('user-registration2', 'User2Controller@index2');

Route::post('user-store2', 'User2Controller@userPostRegistration2');

Route::get('user-login2', 'User2Controller@userLoginIndex2');

Route::post('login2', 'User2Controller@userPostLogin2');

Route::get('dashboard', 'User2Controller@dashboard');
// Route::get('/dashboard', 'User2Controller@dashboard')->name('User2')->middleware('RedirectifnotUser2');


Route::get('logout2', 'User2Controller@logout');


Route::post('/store', "User2Controller@store");
Route::post('/logs', "User2Controller@logs");

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);


// Route::post('addappointment', ['as'=>'appointment.store','uses'=>'AddappointmentController@maildata']);


Route::post('reset_password_without_token', 'AccountsController@validatePasswordRequest');
Route::post('reset_password_with_token', 'AccountsController@resetPassword');



Route::post('storedetails', "AddappointmentController@storedetails"); 
Route::get('index','AddappointmentController@Ashow'); //displaying appointment info to dashboard
Route::post('event', "Addevent@event");
Route::post('storeP', "addPatient@storeP");

Route::post('dstore', "AddDoctorController@dstore"); // storing doctor info
Route::get('Doctorprofile','DprofileController@index2'); // fetching doctor info

Route::post('Ustore', "AdduserController@Ustore"); //storing user details
Route::get('manageusers','AdduserController@usershow'); //fetching user info

Route::get('updateappointment','ShowAppointmentdetails@show'); //showing appointmentdetails


Route::get('view-records','StudViewController@index');  //for a try
Route::get('patientdetails','StudViewController@index'); //fetching patient info
Route::get('patientprint','StudViewController@print');
Route::get('patienthistory','addPatient@patientshow');  // showing patient info and saving add patient info

Route::post('Hstore','HospitaldController@Hstore');  //hospital details storing
Route::post('/invoicedetails', "invoiceController@invoicedetails");  //invoice

Route::post('dschedule', "dscheduleController@dschedule");  //storing doctor schedule details
Route::get('schedule','dscheduleController@scheduleShow'); //fetching schedule details


//Route::get('Doctorprofile','DprofileController@dshow2');

//appointment details sarchbar
Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
   
    // $user = DB::table('appointment')->where('PatientId', '$q')->first()->my_field;
    if(count($user) > 0)
        return view('doctor.appointmentdetails')->withDetails($user)->withQuery ( $q );
    else echo "<div class='form'>
    <h3>No Details found. Try to search again !</h3><br/>
    <p class='link'> <a href='/updateappointment'>Go back</a></p>
    </div>";
 });

 //appclone setup

 Route::any('/Asearch',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
    $book = DB::table('book_appmt')->where('name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
   
    // $user = DB::table('appointment')->where('PatientId', '$q')->first()->my_field;
    if(count($user) > 0)
        return view('doctor.appclone')->withDetails($user)->withQuery ( $q );
        // ->withDetails2($book)->withQuery ( $q );
    elseif(count($book) > 0)
        return view('doctor.appclone')->withDetails2($book)->withQuery ( $q );
    else echo "<div class='form'>
    <h3>No Details found. Try to search again !</h3><br/>
    <p class='link'> <a href='/updateappointment'>Go back</a></p>
    </div>";
 });


 Route::any('/Bsearch',function(){
    $q = Input::get ( 'q' );
    // $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
    $book = DB::table('book_appmt')->where('name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
   
    // $user = DB::table('appointment')->where('PatientId', '$q')->first()->my_field;
    if(count($book) > 0)
        return view('doctor.appclone2')->withDetails2($book)->withQuery ( $q );
    else echo "<div class='form'>
    <h3>No Details found. Try to search again !</h3><br/>
    <p class='link'> <a href='/updateappointment'>Go back</a></p>
    </div>";
 });

 //for appointment portal details appclone n mail
//  Route::any('/Bsearch',function(){
//     $q = Input::get ( 'q' );
//     // $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
//     $book = DB::table('book_appmt')->where('name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
   
//     // $user = DB::table('appointment')->where('PatientId', '$q')->first()->my_field;
//     // if(count($user) > 0)
//     //     return view('doctor.appclone')->withDetails($user)->withQuery ( $q );
//     if(count($book) > 0)
//         return view('doctor.appclone')->withDetails2($book)->withQuery ( $q );
//     else echo "<div class='form'>
//     <h3>No Details found. Try to search again !</h3><br/>
//     <p class='link'> <a href='/updateappointment'>Go back</a></p>
//     </div>";
//  });

 //users details searchbar
 Route::any('/Usersearch',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('adduser')->where('fname','LIKE','%'.$q.'%')->orWhere('ProfileID','LIKE','%'.$q.'%')->orWhere('EmployeeID','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
        return view('doctor.userdetails')->withDetails($user)->withQuery ( $q );
        else echo "<div class='form'>
        <h3>No Details found. Try to search again !</h3><br/>
        <p class='link'> <a href='/manageusers'>Go back</a></p>
        </div>";
    // else return view ('doctor.manageusers')->withMessage('No Details found. Try to search again !');
 });

 Route::any('/patientsearch',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('patientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
    $inv = DB::table('invoice')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
    
    //$user = DB::table('addpatient')->where('fname', $request->input('q'))->get();
     //$user = DB::table('addpatient')->where('fname', $q)->first()->my_field;
    if(count($user ))
        return view('doctor.patientdetails')->withDetails($user)->withQuery ( $q )
        ->withinv($inv)->withQuery ( $q );
        elseif (count($user ) > 0 && count($inv) > 0) {
            return view('doctor.patientdetails')->withDetails($user)->withQuery ( $q )
        ->withinv($inv)->withQuery ( $q );
        }
        else echo "<div class='form'>
        <h3>No Details found. Try to search again !</h3><br/>
        <p class='link'> <a href='/patienthistory'>Go back</a></p>
        </div>";
    // else return view ('doctor.patienthistory')->withMessage('No Details found. Try to search again !');
 });

 Route::any('/patientsearch2',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
    $hos = DB::select('select * from addhospital ');
    $docto =  DB::Select('select * from doctor_table ORDER BY id DESC LIMIT 1');

    
    // $inv = DB::select('select * from invoice ')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->get();
    // return view('doctor.patientprint',['hos'=>$hos]);
    //$user = DB::table('addpatient')->where('fname', $request->input('q'))->get();
     //$user = DB::table('addpatient')->where('fname', $q)->first()->my_field;
    if(count($user ) > 0)
        return view('doctor.patientprint')->withDetails($user)->withQuery ( $q )
        ->withhos($hos)
        ->withdocto($docto);
        // ->withinv($inv)->withQuery ( $q );
          else echo "<div class='form'>
        <h3>No Details found. Try to search again !</h3><br/>
        <p class='link'> <a href='/patientdetails'>Go back</a></p>
        </div>";
    // else return view ('doctor.patientdetails')->withMessage('No Details found. Try to search again !');

 });

//for revisit appointment
 Route::any('/revisit',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('addpatient')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->get();
   
    // $user = DB::table('appointment')->where('PatientId', '$q')->first()->my_field;
    if(count($user) > 0)
        return view('doctor.revisitappointment')->withDetails($user)->withQuery ( $q );
    else echo "<div class='form'>
    <h3>No Details found. Try to search again !</h3><br/>
    <p class='link'> <a href='/addappointment'>Go back</a></p>
    </div>";
 });


 //for invoice patient details
 Route::any('/dinvoice',function(){
    $q = Input::get ( 'q' );
    $user = DB::table('appointment')->where('Patient_name','LIKE','%'.$q.'%')->orWhere('PatientId','LIKE','%'.$q.'%')->orWhere('AppointmentId','LIKE','%'.$q.'%')->get();
   
    // $user = DB::table('appointment')->where('PatientId', '$q')->first()->my_field;
    if(count($user) > 0)
        return view('doctor.addpayment')->withDetails($user)->withQuery ( $q );
    else echo "<div class='form'>
    <h3>No Details found. Try to search again !</h3><br/>
    <p class='link'> <a href='/addpayment'>Go back</a></p>
    </div>";
 });





// Route::any('/search',function(){
//     $q = Input::get ( 'q' );
//     $user = appointment::where('fname','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
//     if(count($user) > 0)
//         return view('details')->withDetails($user)->withQuery ( $q );
//     else return view ('form')->withMessage('No Details found. Try to search again !');
// });

// Route::get('/details', function () {
//     return view('details');
// });
// Route::get('/form', function () {
//     return view('form');
// });


Route::get('/form','SearchController@index');  //searchbar try
Route::get('/search','SearchController@search'); //try

//appointment mail try
//contactus controoler postcontact method
Route::post('/amail','ContactUSController@postContact');

Route::post('/exa','ContactUSController@exa'); //2nd try

//pie chart try



Route::get('laravel_google_chart', 'ChartController@chart2'); //2nd one
Route::get('laravel_google_chart', 'LaravelGoogleGraph@chart'); //2nd
// Route::get('google_pie_chart', 'LaravelGoogleGraph@report');
Route::get('stocks','StockController@index');
Route::get('stock/chart','StockController@chart2');

//password forgot
Route::post('password','PasswordforgotController@pass');
Route::post('password2','PasswordforgotController@pass2');

// Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
// Route::post('password/email', 'Auth\PasswordController@sendResetLinkEmail');

// Route::post('password/reset', 'Auth\PasswordController@reset');

Route::get("/chartjs", "LaravelGoogleGraph@Chartjs");

Route::get('index', 'ChartController@index'); //for 1st pie chart index
Route::get('index','AddappointmentController@Ashow'); //schedule appointment info at index page

// Route::get('index', 'ChartController@index');

Route::get('appclone','ShowAppointmentdetails@Ashow'); // appclone details
Route::get('delete/{id}','ShowAppointmentdetails@destroy'); //delete button



Route::get('google_pie_chart', 'ChartController@index');
Route::get('payment', 'invoiceController@Invoiceshow'); //invoice details

Route::get('edit/{id}','dscheduleController@show');
Route::post('edit/{id}','dscheduleController@edit'); //updating schedule details by id


// Route::get('patientprint','addPatient@hosinfoshow');
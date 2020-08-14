<?php

namespace App\Http\Controllers;


use App\Http\Controllers\AuthenticatesUsers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\user2;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;


class User2Controller extends Controller {


    public function store(request $request){

        //   echo "wellcome to doctor signin page controller";
        //print_r($request->input());
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');
        
        $save = DB::insert('insert into user2s(id,name,email,password) values(?,?,?,?)',[null , $name,$email, $password ]);
    
        if(count($save)){
            echo "<div class='form'>
            <h3>Successfully created a account.</h3><br/>
            <p class='link'>Now go to  <a href='/login2'>Login</a> page and login to your account.</p>
            </div>";
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/registration2'>Signup</a> again.</p>
                </div>";
        }


        
    
    
        }


        public function logs(request $request){

            //   echo "wellcome to doctor signin page controller";
            //print_r($request->input());
            $email = $request->input('email');
            $password = $request->input('password');
            
            
            $data =  DB::select('select id from user2s where email = ? and password = ?' ,[ $email, $password]);
            //print_r($data);
            // echo count($data);
    
            if(count($data)){
    
                //$redirectTo = '/index';
                echo "<div class='form'>
                 <h3>You are successfullt logged in.</h3><br/>
                 <p class='link'>Now you can Go to your  <a href='/index'>Dashboard</a> page.</p>
                 </div>";
            }else{
                echo "<div class='form'>
                <h3>Incorrect Username/password.</h3><br/>
                <p class='link'>Click here to <a href='/login2'>Login</a> again.</p>
                </div>";
            }

        }



      

    // protected $redirectTo = '/dashboard';

    // public function __construct()
    // {
    //   $this->middleware('guest')->except('logout2');
    // }

    // public function guard()
    // {
    //  return Auth::guard('User2');
    // }


 // -------------------- [ user registration view ] -------------
    public function index2() {
        return view('registration2');
    }

// // --------------------- [ Register user ] ----------------------
    public function userPostRegistration2(Request $request) {

        // validate form fields
        $request->validate([
                'name'              =>      'required',
                'email'             =>      'required|email',
                'password'          =>      'required|min:6',
                'confirm_password'  =>      'required|same:password',
                
            ]);

        $input          =           $request->all();

        // if validation success then create an input array
        $inputArray      =           array(
            'name'              =>      $request->name,
            'email'             =>      $request->email,
            'password'          =>      Hash::make($request->password),
            'phone'             =>      $request->phone
        );

       // register user
        $user           =           User2::create($inputArray);

        // if registration success then return with success message
        if(!is_null($user)) {
            return back()->with('success', 'You have registered successfully.');
        }

        // else return with error message
        else {
            return back()->with('error', 'Whoops! some error encountered. Please try again.');
        }
    }


// // -------------------- [ User login view ] -----------------------
    public function userLoginIndex2() {
        return view('login2');
    }


// --------------------- [ User login ] ---------------------
    public function userPostLogin2(Request $request) {

        $request->validate([
            "email"           =>    "required|email",
            "password"        =>    "required|min:6"
        ]);

        $user2Credentials = $request->only('email', 'password');

        // check user using auth function
        if (Auth::attempt($user2Credentials)) {
            return redirect()->intended('dashboard');
        }

        else {
            return back()->with('error', 'Whoops! invalid username or password.');
        }
    }


// // ------------------ [ User Dashboard Section ] ---------------------
    public function dashboard() {

        // check if user logged in
        if(Auth::check()) {
            return view('index');
        }

        return redirect::to("user-login2")->withSuccess('Oopps! You do not have access');
    }


// // ------------------- [ User logout function ] ----------------------
public function logout(Request $request ) {
    $request->session()->flush();
    Auth::logout();
    return Redirect('user-login2');
    }
}



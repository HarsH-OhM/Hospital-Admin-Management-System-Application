<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Validator;


class AdduserController extends Controller
{
    //
    public function Ustore(request $request){

        
        $numrow = DB::table('adduser')->count(); 
        $numrow++;

        $ProfileID = "SIC".'-'.date('Y').'-'."Pro0". $numrow;
        $EmployeeID = "SIC".'-'.date('Y').'-'."EMP0". $numrow;

        $Occupation = $request->input('occupation');
        // $ProfileID = $request->input('Pid');
        // $EmployeeID = $request->input('Eid');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $dob = $request->input('dob');
        $Age = $request->input('age');
        $gender = $request->input('gender');
        $alt_email = $request->input('alt_email');
        $phone = $request->input('phone');
        $Join_date = $request->input('jdate');
        $status = $request->input('status');

        $save = DB::insert('insert into adduser(Occupation,ProfileID,EmployeeID,fname,lname,username,email,password,dob,Age,gender,alt_email,phone,Join_date,status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$Occupation,$ProfileID,$EmployeeID,$fname,$lname,$username,$email,$password,$dob,$Age,$gender,$alt_email,$phone,$Join_date,$status]);
    
        if(count($save)){
            echo "<div class='form'>
            <h3> User details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/adduser'>User page</a></p>
            </div>";
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/adduser'>try again </a> </p>
                </div>";
        }
    }


    public function usershow(){
        $users = DB::select('select * from adduser');
        return view('doctor.manageusers',['users'=>$users]);
        }
}

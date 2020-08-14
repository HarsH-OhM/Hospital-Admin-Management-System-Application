<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use App\Images;
use Image;

use Illuminate\Support\Facades\Input;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;



class AddDoctorController extends Controller
{
    //

   

    public function dstore(request $request){

        //   echo "wellcome to doctor signin page controller";
        
        
    

        $input = $request->all();
        // $input['days'] = json_encode($input['days']);
        //print_r($request->input());
        $Doctor_img = $request->input('image');
        $First_name = $request->input('fname');
        $Last_name = $request->input('lname');
        $Birth_date = $request->input('dob');
        $Gender = $request->input('gender');


        $image = Image::make($Doctor_img);

       Response::make($image->encode('jpeg'));
        //sechdule info

        $From_date = $request->input('datefrom');
        $To_date = $request->input('dateto');
        $Doctor_name = $request->input('Doname');
        
        $Days = $input['days'] = json_encode($input['days']);
        $Start_time = $request->input('starttime');
        $End_time = $request->input('endtime');
        $Note = $request->input('note');
        $status = $request->input('status');
      

        // $Day1 = $request->input('day1');
        // $Start_time = $request->input('start_time');
        // $End_time = $request->input('end_time');

        // $Day2 = $request->input('day2');
        // $start_time2 = $request->input('start_time2');
        // $end_time2 = $request->input('end_time2');

        // $Day3 = $request->input('day3');
        // $start_time3 = $request->input('start_time3');
        // $end_time3 = $request->input('end_time3');


        // $Day4 = $request->input('day4');
        // $start_time4 = $request->input('start_time4');
        // $end_time4 = $request->input('end_time4');

        // $Day5 = $request->input('day5');
        // $start_time5 = $request->input('start_time5');
        // $end_time5 = $request->input('end_time5');

        
        // $Day6 = $request->input('day6');
        // $start_time6 = $request->input('start_time6');
        // $end_time6 = $request->input('end_time6');

        // $Day7 = $request->input('day7');
        // $start_time7 = $request->input('start_time7');
        // $end_time7 = $request->input('end_time7');

        //contact info

        $Address = $request->input('address');
        $Email = $request->input('email');
        $Country = $request->input('country');
        $State = $request->input('state');
        $Pincode = $request->input('pincode');
        $Contact_no = $request->input('phone');
        
        //education info
        $Education_institution = $request->input('institute');
        $Subject = $request->input('subject');
        $Start_date = $request->input('dstart');
        $Complete_date = $request->input('dend');
        $Degree = $request->input('degree');
        $Grade = $request->input('grade');

        //experience info
        $Company_name = $request->input('company');
        $Location = $request->input('location');
        $Job_position = $request->input('job');
        $Period_from = $request->input('pstart');
        $Period_to = $request->input('pend');




        // $Doctor_image = $request->image;

      
   
        // Response::make($Doctor_image->encode('jpeg'));
        
        $save = DB::insert('insert into doctor_table(Doctor_img,First_name,Last_name,Birth_date,Gender,From_date,To_date,Doctor_name,Days,Start_time,End_time,Note,status,Address,Email,Country,State,Pincode,Contact_no,Education_institution,Subject,Start_date,Complete_date,Degree,Grade,Company_name,Location,Job_position,Period_from,Period_to) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$Doctor_img,$First_name,$Last_name,$Birth_date,$Gender,$From_date,$To_date,$Doctor_name,$Days,$Start_time,$End_time,$Note,$status,$Address,$Email,$Country,$State,$Pincode,$Contact_no,$Education_institution,$Subject,$Start_date,$Complete_date,$Degree,$Grade,$Company_name,$Location,$Job_position,$Period_from,$Period_to]);
    
        if(count($save)){
            echo "<div class='form'>
            <h3> Doctors details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/Doctorprofile'>Profile page</a></p>
            </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/editprofile'>try</a> again.</p>
                </div>";
        }

        
  


}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Addappointment;


use Haruncpi\LaravelIdGenerator\IdGenerator;

class addPatient extends Controller
{
    //
    public function storeP(request $request){


        // $config = [
        //     'table' => 'addpatient',
        //     'length' => 6,
        //     'prefix' => 'SIC-'
        // ];
        
        // // now use it
        // $newid = IdGenerator::generate($config);
        
        // // use within single line code
        // // $id = IdGenerator::generate(['table' => 'todos', 'length' => 6, 'prefix' => date('y')]);
        // $newid = IdGenerator::generate(['table' => 'addpatient', 'length' => 6, 'prefix' => 'SIC-']);
        // $patient2 = Addappointment::where('id', $request->patientId)->first();
        //   $patient = DB::table('appointment')->where('id', $request->id)->get();
        // $numrow = count($patient)+1;

//         $patient = DB::table('appointment')->where('id', '<=', $correctedComparisons)->get();
// $numrow = $patient->count();
        

        //  $numrow = DB::table('addpatient')->count(); 
        //  $numrow++;

         //$ApppointmentId = "SIC".'-'.date('Y').'-'."A0". $numrow;

        // if($numrow <10){
        //     $newid = "SIC".'-'.date('Y').'-'."000". $numrow;
          

        // }elseif($numrow >=10 && $numrow<=999){
        //     $newid = "SIC".'-'.date('Y').'-'."00". $numrow;
        // }elseif( $numrow<=1000){
        //     $newid = "SIC".'-'.date('Y').'-'."0". $numrow;
        // }

        //   echo "wellcome to doctor signin page controller";
        //print_r($request->input());
        
        // $atype = $request->input('atype');
        // $Patient_name = $request->input('pname');
        // $Age = $request->input('age');
        // $patientId = $request->input('pid');
        // $email = $request->input('email');
        // $dob = $request->input('dob');
        // $gender = $request->input('gender');
        // $height = $request->input('height');
        // $weight = $request->input('weight');
        // $address = $request->input('address');
        // $country = $request->input('country');
        // $city   = $request->input('city');
        // $state = $request->input('state');
        // $postalcode = $request->input('postalcode');
        // $phone = $request->input('phone');
        // $date = $request->input('date');
        // $reason = $request->input('reason');
        // $note = $request->input('note');
        
        // $save = DB::insert('insert into addpatient(newid,fname,lname,patientId,email,dob,gender,height,weight,address,country,city,state,postalcode,phone,date,reason,note) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$newid,$fname,$lname,$patientId,$email,$dob,$gender,$height,$weight,$address,$country,$city,$state,$postalcode,$phone,$date,$reason,$note]);
    

        // $this->validate($request, [
        //     'fname' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'patientId' => 'required'
        //     ]);
 
            
        // if(count($save)){
        //     echo "<div class='form'>
        //     <h3> patient details are added successfully.</h3><br/>
        //     <p class='link'> go back to <a href='/patientadd'>Patient page</a></p>
        //     </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

            // alert(" your patient details are added successfully.");
        // }else {
        //     "<div class='form'>
        //         <h3>Incorrect Details</h3><br/>
        //         <p class='link'>Click here to <a href='/patientadd'>try again </a> </p>
        //         </div>";
        // }


 //for old patient we are adding new appointment in only appointment table not in patint table.
        $numrow = DB::table('appointment')->count(); 
         $numrow++;

        
         $PatientId = $request->input('pid');
         $AppointmentId = "SIC".'-'.date('Y').'-'."A0". $numrow;

        
        $atype = $request->input('atype');
        // $PatientId = $request->input('pid');
        // $AppointmentId = $request->input('aid');
        $Patient_name = $request->input('pname');
        $Age = $request->input('age');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $dob = $request->input('dob');
        $gender = $request->input('gender');
        $Height = $request->input('height');
        $Weight = $request->input('weight');
        $Address = $request->input('address');
        $country = $request->input('country');
        $city   = $request->input('city');
        $state = $request->input('state');
        $postalcode = $request->input('postalcode');
        $Doctor_name = $request->input('dname');
        $Reason = $request->input('reason');
        $date = $request->input('date');
        $time = $request->input('time');
        $note = $request->input('note');
        $status = $request->input('status');

        // $save = DB::insert('insert into addpatient(atype,PatientId,Patient_name,Age,email,phone,dob,gender,Height,Weight,Address,country,city, state,postalcode,Reason,note,status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$atype,$PatientId,$Patient_name,$Age,$email,$phone,$dob,$gender,$Height,$Weight,$Address,$country,$city, $state,$postalcode,$Reason,$note,$status]);
        $save = DB::insert('insert into appointment(atype,PatientId,AppointmentId,Patient_name,Age,email,phone,dob,gender,Height,Weight,Address,country,city, state,postalcode,Doctor_name,Reason,date,time,note,status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$atype,$PatientId,$AppointmentId,$Patient_name,$Age,$email,$phone,$dob,$gender,$Height,$Weight,$Address,$country,$city, $state,$postalcode,$Doctor_name,$Reason,$date,$time,$note,$status]);

       
        if(count($save)){
            echo "<div class='form'>
            <h3> your appointment details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='updateappointment'>Appointment page</a></p>
            </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

            // alert(" your appointment details are added successfully.");
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/revisitappointment'>try</a> again.</p>
                </div>";
        }

         
        
        

        



}

public function patientshow(){
    $users = DB::select('select * from appointment');
    return view('doctor.patienthistory',['users'=>$users]);
    }

    // public function hosinfoshow(){
    //     $users = DB::select('select * from addpatient ');
    //     return view('doctor.addpatient',['users'=>$users]);
    //     }
}


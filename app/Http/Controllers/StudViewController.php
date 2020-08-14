<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudViewController extends Controller {
public function index(){
$users = DB::select('select * , CONCAT(patientId , id) as patientId from addpatient');

// $users = DB::select('select concat(`patientId`, `id`) as `patientId` , fname,lname,email,dob,gender,height,weight,address,country,city,state,postalcode,phone,date,reason,note
//     from addpatient' );

return view('doctor.patientdetails',['users'=>$users]);


}

public function print(){
    $users = DB::select('select * from addpatient');
    
    // $users = DB::select('select concat(`patientId`, `id`) as `patientId` , fname,lname,email,dob,gender,height,weight,address,country,city,state,postalcode,phone,date,reason,note
    //     from addpatient' );
    
    return view('doctor.patientprint',['users'=>$users]);
    
    
    }

// public function index2(){
//     $users = DB::select('select * from addpatient order by id desc limit 1');
//     $lastid = DB::select('select id from addpatient');
  

//     if($lastid == " "){
//         $appid = "apt1";
//     }else{

//         $appid = substr($lastid, 3);
//         $appid = intval($appid);
//         $aptid = "apt" + ($appid +1);

//     }
//     return view('doctor.patientadd',['users'=>$users]);
//     }
}
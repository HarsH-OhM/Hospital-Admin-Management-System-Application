<?php

namespace App\Http\Controllers;

use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


class dscheduleController extends Controller
{
    //
    public function dschedule(request $request){

        $input = $request->all(); 

        $From_date = $request->input('datefrom');
        $To_date = $request->input('dateto');
        $Doctor_name = $request->input('Doname');
        
        $Days = $input['days'] = json_encode($input['days']);
        $Start_time = $request->input('starttime');
        $End_time = $request->input('endtime');
        $status = $request->input('status');
        $Department = $request->input('department');
        $Note = $request->input('note');
        
      
      
        
        $save = DB::insert('insert into dschedule(From_date,To_date,Doctor_name,Days,Start_time,End_time,Department,status,Note) values(?,?,?,?,?,?,?,?,?)',[$From_date,$To_date,$Doctor_name,$Days,$Start_time,$End_time,$Department,$status,$Note]);
    
        if(count($save)){
            echo "<div class='form'>
            <h3> Doctor Schedule details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/schedule'>schedule page</a></p>
            </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

            // alert(" your appointment details are added successfully.");
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/schedule-add'>try</a> again.</p>
                </div>";
        }


}

public function scheduleShow(){
    $users = DB::select('select * from dschedule');
    return view('doctor.schedule',['users'=>$users]);
    }

    public function show($id) {
        $users = DB::select('select * from dschedule where id = ?',[$id]);
        return view('doctor.edit-dschedule',['users'=>$users]);
     }

    public function edit(Request $request,$id) {

        $input = $request->all(); 

        $From_date = $request->input('datefrom');
        $To_date = $request->input('dateto');
        $Doctor_name = $request->input('Doname');
        
        // $Days = $input['days'] = json_encode($input['days']);
        $Days = $input['days'];
        $Start_time = $request->input('starttime');
        $End_time = $request->input('endtime');
        $status = $request->input('status');
        $Department = $request->input('department');
        $Note = $request->input('note');
        
        DB::update('update dschedule set From_date = ?,To_date=?,Doctor_name=?,Days=?,Start_time=?,End_time=?,Department=?,status=?,Note=? where id = ?',[$From_date,$To_date,$Doctor_name,$Days,$Start_time,$End_time,$Department,$status,$Note,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/schedule">Click Here</a> to go back.';
     }
}

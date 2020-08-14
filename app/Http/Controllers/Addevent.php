<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;


use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;


class Addevent extends Controller
{
    //
    public function event(request $request){

        //   echo "wellcome to doctor signin page controller";
        //print_r($request->input());
        $event_name = $request->input('event_name');
        $date = $request->input('date');
        
        
        $save = DB::insert('insert into cevent(event_name,date) values(?,?)',[$event_name, $date]);
    
        if(count($save)){
            echo "<div class='form'>
            <h3> your event details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/calender'>previous page</a></p>
            </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

            // alert(" your appointment details are added successfully.");
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/calender'>try</a> again.</p>
                </div>";
        }


}
}

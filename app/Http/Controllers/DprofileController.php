<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;

use App\DoctorProfile;
use App\Dschedule;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Response;
use App\Images;
use Image;




class DprofileController extends Controller
{
    //



    

    public function index2(){


        $users = DB::Select('select * from doctor_table ORDER BY id DESC LIMIT 1'); //last row fetching only
//         //$users = DB::Select('select * from doctor_table')->orderBy('id', 'DESC')->first();
// //    collect($users)->sortByDesc('created_at')->orderBy('id', 'DESC')->first();
//         return view('doctor.Doctorprofile',['users'=>$users]);


//for multiple table 
        return View('doctor.Doctorprofile')
        ->with(['users'=>$users], DoctorProfile::all())
        ->with('users2', dschedule::all());
        
        

        
               
                
        }

        // public function dshow2(){

        //         $users2 = DB::select('select * from dschedule');
        //         return view('doctor.Doctorprofile',['users2'=>$users2]);

        // }


}

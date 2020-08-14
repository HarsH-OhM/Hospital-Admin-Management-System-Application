<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;

class ShowAppointmentdetails extends Controller
{
    //

    // public function search(){
    //     $q = Input::get ( 'q' );
    //     $user = DB::table('appointment')->where('PatientId','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
    //     if(count($user) > 0)
    //         return view('doctor.appointmentdetails')->withDetails($user)->withQuery ( $q );
    //     else return view ('doctor.updateappointment')->withMessage('No Details found. Try to search again !');
    
    // }

    public function Ashow(){
        $users = DB::select('select * from appointment');
        return view('doctor.appclone',['users'=>$users]);
       
        
        
       }

       
            public function show(){
            $users = DB::select('select * from appointment');
            $booking = DB::select('select * from book_appmt');
            return view('doctor.updateappointment',['users'=>$users])
            ->with(['booking'=>$booking]);



        // //     return View('doctor.index')
        // //     ->with(['users'=>$users], Addappointment::all())
        // //  //    ->with(['chart_data'=>$data],addPatient::all())
        // //     ->with($data, addPatient::all())
             }

            //delete button 
            public function destroy($id) {
            DB::delete('delete from appclone where id = ?',[$id]);
            echo "Record deleted successfully.
            ";
            echo '<a href="updateappointment">Click Here</a> to go back.';
            }

        
        // public function rowdata($id,$name){
        //     //you can access $id and $name now
        //     }
            
}

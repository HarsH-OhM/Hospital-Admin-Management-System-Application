<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Addappointment;
use App\addPatient;
use App\Invoice;

use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;

use Haruncpi\LaravelIdGenerator\IdGenerator;

use Response;
use Carbon\Carbon;
use Charts;


use App\Charts\SampleChart;





class AddappointmentController extends Controller
{
    //

    public function storedetails(request $request){

        //   echo "wellcome to doctor signin page controller";
        //print_r($request->input());

   

        
         $numrow = DB::table('appointment')->count(); 
         $numrow++;
         $numrow2 = DB::table('addpatient')->count(); 
         $numrow2++;


         $AppointmentId = "SIC".'-'.date('Y').'-'."A0". $numrow;
         
         $PatientId = "SIC".'-'.date('Y').'-'."P0". $numrow2;
        //  $PatientId = $request->input('pid');
         

        
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

        $save = DB::insert('insert into addpatient(atype,PatientId,Patient_name,Age,email,phone,dob,gender,Height,Weight,Address,country,city, state,postalcode,Reason,note,status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$atype,$PatientId,$Patient_name,$Age,$email,$phone,$dob,$gender,$Height,$Weight,$Address,$country,$city, $state,$postalcode,$Reason,$note,$status]);
        $save = DB::insert('insert into appointment(atype,PatientId,AppointmentId,Patient_name,Age,email,phone,dob,gender,Height,Weight,Address,country,city, state,postalcode,Doctor_name,Reason,date,time,note,status) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$atype,$PatientId,$AppointmentId,$Patient_name,$Age,$email,$phone,$dob,$gender,$Height,$Weight,$Address,$country,$city, $state,$postalcode,$Doctor_name,$Reason,$date,$time,$note,$status]);

       
        if(count($save)){
            echo "<div class='form'>
            <h3> your appointment details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/addappointment'>Appointment page</a></p>
            </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

            // alert(" your appointment details are added successfully.");
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/addappointment'>try</a> again.</p>
                </div>";
        }

         
        
        

     //sending mail 

//        $this->validate($request, [
//         'Patient_name' => 'required',
//         'email' => 'required|email',
//         'phone' => 'required',
//         'reason' => 'required'
//         ]);
 
//       Addappointment::create($request->all()); 
   
//     \Mail::send('emails.addappointmentmail',
//        array(
//            'atype' => $request->get('atype'),
//            'Patient_id' => $request->get('pid'),
//            'phone' => $request->get('phone'),
//            'Patient_name' => $request->get('pname')
//        ), function($message) use ($request)
//    {

//     $email = $request->input('email');
//       $message->from($email);
//       $message->to('gurjarhariom3114@gmail.com', 'Admin');
//    });
 
//     return back()->with('success', 'Thanks for contacting us!'); 
   }

  
   public function Ashow(){
     $users = DB::select('select * from appointment');
    //  $users22 = DB::select('select * from addpatient');
    // return view('doctor.index',['users'=>$users]);


    $record =  DB::table('addpatient')->select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
    ->where('created_at', '>', Carbon::today()->subDay(6))
    ->groupBy('day_name','day')
    ->orderBy('day')
    ->get();
   
       
     
        $data = [];
    
        foreach($record as $row) {
           $data['label'][] = $row->day_name;
           $data['data'][] = (int) $row->count;
         }
    
       $data['chart_data'] = json_encode($data);
    //    return view('doctor.index', $data);

//3rd onr pie chart

    $record2 =  DB::table('invoice')->select(\DB::raw("COUNT(*) as count"), \DB::raw("DAYNAME(created_at) as day_name"), \DB::raw("DAY(created_at) as day"))
    ->where('created_at', '>', Carbon::today()->subDay(6))
    ->groupBy('day_name','day')
    ->orderBy('day')
    ->get();
   
       
     
        $data3 = [];
    
        foreach($record2 as $row) {
           $data3['label'][] = $row->day_name;
           $data3['data'][] = (int) $row->count;
         }
    
       $data3['chart_data2'] = json_encode($data3);



    //second pie chart
   
    $data2 = DB::table('appointment')
    ->select(
     DB::raw('atype as atype'),
     DB::raw('count(*) as number'))
    ->groupBy('atype')
    ->get();
  $array[] = ['atype', 'Number'];
  foreach($data2 as $key => $value)
  {
   $array[++$key] = [$value->atype, $value->number];
  }
//   return view('doctor.index')->with('atype', json_encode($array));

      



$products = addPatient::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
// $products22 = Addappointment::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
        //  $chart = Charts::database($products, 'bar', 'highcharts')
        //              ->title('Patient Details')
        //              ->elementLabel('Total Patient')
        //              ->dimensions(1000, 500)
        //              ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
        //              ->groupByMonth(date('y'), true);
                    //  ->groupByDay(date('d'), true);  //here we can change  and see the day or month wise data
                    // $chart = Charts::multiDatabase('line', 'highcharts')
                    $chart = Charts::database($products, 'line', 'highcharts')
                    ->title(' Total Patient Progress')
                    ->elementLabel('Total Patient')
                    ->dimensions(1000, 500)
                    ->groupByMonth(date('Y'), true);
                  
        // return view('doctor.index', ['chart' => $chart]);


        $products2 = Addappointment::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
        $chart2 = Charts::database($products2, 'donut', 'highcharts')
                    ->title('Total Appointment Progress')
                    ->elementLabel('Total Appointment')
                    ->dimensions(1000, 500)
                    ->groupByMonth(date('Y'), true);
                   

    
//     $products3 = Invoice::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
    
//     $chart3 = Charts::database($products3, 'donut', 'highcharts')
//                 ->title('Total Revenue')
//                 ->elementLabel('Total Appointment')
//                 ->dimensions(1000, 500)
//                 ->groupByMonth(date('Y'), true)
//                 ->height(300)
// ->width(400);


       return View('doctor.index')
       ->with(['users'=>$users], Addappointment::all())
    //    ->with(['chart_data'=>$data],addPatient::all())
       ->with($data, addPatient::all())
       ->with($data3, Invoice::all())
       ->with(['chart' => $chart], addPatient::all()) 
       ->with(['chart2' => $chart2], Addappointment::all()) 
      //  ->with(['chart3' => $chart3], Invoice::all()) 
       ->with('atype', json_encode($array));

       
       
    
    
    
    }


}



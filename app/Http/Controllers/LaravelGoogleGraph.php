<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LaravelGoogleGraph extends Controller
{
    //
    function chart()
    {
     $data = DB::table('appointment')
       ->select(
        DB::raw('atype as atype'),
        DB::raw('count(*) as number'))
       ->groupBy('atype')
       ->get();
     $array[] = ['atype', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->atype, $value->number];
     }
     return view('google_pie_chart')->with('atype', json_encode($array));
    }

    public function index()
    {
        return view('google_pie_chart');
    }

    public function Chartjs(){

      $data = DB::table('appointment')
      ->select(
       DB::raw('id as id'),
       DB::raw('count(*) as number'))
      ->groupBy('id')
      ->get();

      $array[] = ['id', 'Number'];

      foreach($data as $key => $value)
     {
      $array[++$key] = [$value->id, $value->number];
     }

      $month = array('Jan', 'Feb', 'Mar', 'Apr', 'May');
      // $data  = array(1, 2, 3, 4, 5);
      return view('google_pie_chart',['Months' => $month, 'atype', json_encode($array)]);
    }

    // public function chart2()
    //   {
    //     $viewer = patient::select(DB::raw("SUM(id) as count"))
    //     ->orderBy("id")
    //     ->groupBy(DB::raw("MONTH(date)"))
    //     ->get()->toArray();
    // $viewer = array_column($viewer, 'count');
    
    // // $click = Click::select(DB::raw("SUM(numberofclick) as count"))
    // //     ->orderBy("created_at")
    // //     ->groupBy(DB::raw("year(created_at)"))
    // //     ->get()->toArray();
    // // $click = array_column($click, 'count');
    

    // return view('google_pie_chart')
    //         ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK));
    //         // ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
    //   }


//       public function report()
// {
//     // $userCompany = Auth::user()->company_id;
//     // $userId = Auth::user()->id;

// // $gender_record = HrEmployee::selectRaw('count(gender_id) as count,gender_id, if (gender_id = 1, "Male", "Female") as gender')->where('company_id', $userCompany)->groupBy('gender_id')->get();        
// // $gender_data = [];

// $gender_record = DB::table('appointment')
//        ->select(
//         DB::raw('atype as atype'),
//         DB::raw('count(*) as number'))
//        ->groupBy('atype')
//        ->get();
//        $gender_data[] = ['atype', 'Number'];

// foreach($gender_record as $row) {
//    $gender_data['gender_label'][] = $row->atype;
//    $gender_data['gender_data'][] = (int) $row->number;
//  }

//  $gender_data['gender_chart_data'] = json_encode($gender_data);    
    
//     return view('google_pie_chart', $gender_data);       
// }
    
}

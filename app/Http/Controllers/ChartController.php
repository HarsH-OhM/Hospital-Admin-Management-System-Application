<?php
namespace App\Http\Controllers; 
use App\User;
use Illuminate\Http\Request;
use Redirect,Response;
Use DB;
use Carbon\Carbon;
use Charts;
class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
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
    return view('google_pie_chart', $data);



    


    //2nd 
    //     $data = DB::table('appointment')
    //    ->select(
    //     DB::raw('atype as atype'),
    //     DB::raw('count(*) as number'))
    //    ->groupBy('atype')
    //    ->get();
    //  $array[] = ['atype', 'Number'];
    //  foreach($data as $key => $value)
    //  {
    //   $array[++$key] = [$value->atype, $value->number];
    //  }
    //  return view('doctor.index')->with('atype', json_encode($array));

    }

   

    public function index2()
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
     return view('doctor.index')->with('atype', json_encode($array));


    }

    // public function chart2()
    // {
    //      $products =  DB::table('appointment')->where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"), date('Y'))->get();
    //      $chart = Charts::database($products, 'bar', 'highcharts')
    //                  ->title('Product Details')
    //                  ->elementLabel('Total Products')
    //                  ->dimensions(1000, 500)
    //                  ->colors(['red', 'green', 'blue', 'yellow', 'orange', 'cyan', 'magenta'])
    //                  ->groupByMonth(date('Y'), true);
    //     return view('google_pie_chart', ['chart' => $chart]);
    // }
 
}
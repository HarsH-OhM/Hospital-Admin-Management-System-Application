<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
   public function index()
{
return view('form');
}
public function search(Request $request)
{
if($request->ajax())
{
$output="";
$products=DB::table('contact_us')->where('name','LIKE','%'.$request->search."%")->get();
if($products)
{
foreach ($products as $key => $product) {
$output.='<tr>'.
'<td>'.$product->id.'</td>'.
'<td>'.$product->name.'</td>'.
'<td>'.$product->email.'</td>'.
'<td>'.$product->message.'</td>'.

'</tr>';
}
return Response($output);
   }
   }
}
}

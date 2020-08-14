<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;

class invoiceController extends Controller
{
    //
    public function invoicedetails(request $request){

        // $input = $request->all(); 

        
        $numrow = DB::table('invoice')->count(); 
        $numrow++;

        $Invoice_Id = "SIC".'-'.date('Y').'-'."#INV0". $numrow;

        // $Invoice_Id = $request->input('Invoice_id');
        $Patient_name = $request->input('pname');
        $PatientId = $request->input('pid');
        $AppointmentId = $request->input('aid');
        $Department = $request->input('department');
        
       
        $Email = $request->input('email');
        $Tax = $request->input('tax');
        $Patient_address = $request->input('paddress');
        $Billing_address = $request->input('baddress');
        $Invoice_date = $request->input('idate');
        $Due_date = $request->input('ddate');
        $Item = $request->input('item');
        $Description = $request->input('description');
        $Unit_cost = $request->input('ucost');
        $Qty = $request->input('qty');
        $Amount = $request->input('amount');
        $Tax_amount = $request->input('tamount');
        $Discount = $request->input('discount');
        $Grand_total = $request->input('gtotal');
        $Other_info = $request->input('oinfo');
        
        $save = DB::insert('insert into invoice(Invoice_Id,Patient_name,PatientId,AppointmentId,Department,Email,Tax,Patient_address,Billing_address,Invoice_date,Due_date,Item,Description,Unit_cost,Qty,Amount,Tax_amount,Discount,Grand_total,Other_info) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$Invoice_Id,$Patient_name,$PatientId,$AppointmentId,$Department,$Email,$Tax,$Patient_address,$Billing_address,$Invoice_date,$Due_date,$Item,$Description,$Unit_cost,$Qty,$Amount,$Tax_amount,$Discount,$Grand_total,$Other_info]);
       
        if(count($save)){
            echo "<div class='form'>
            <h3>Invoice details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/payment'>payment page</a></p>
            </div>";

            // return Redirect::to('/addappointment')->with('success', true)->with('message','That was great!');
        

            // alert(" your appointment details are added successfully.");
        }else {
            "<div class='form'>
                <h3>Incorrect Details</h3><br/>
                <p class='link'>Click here to <a href='/addpayment'>try</a> again.</p>
                </div>";
        }

         


    }


    public function Invoiceshow(){

        $users = DB::select('select * from invoice');
        return view('doctor.payment',['users'=>$users]);
    }
}

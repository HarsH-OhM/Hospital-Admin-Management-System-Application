<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;


class HospitaldController extends Controller
{
    //
    public function Hstore(request $request){
        $HospitalName = $request->input('hospitalName');
        $DirectorName = $request->input('directorName');
        $Address = $request->input('address');
        $Country = $request->input('country');
        $City = $request->input('city');
        $State = $request->input('state');
        $PostalCode = $request->input('postalcode');
        $Email = $request->input('email');
        $PhoneNo = $request->input('phone');
        $MobileNo = $request->input('mobile');
        $Fax = $request->input('fax');
        $URL = $request->input('url');

        $save = DB::insert('insert into addHospital(HospitalName,DirectorName,Address,Country,City,State,PostalCode,Email,PhoneNo,MobileNo,Fax,URL) values(?,?,?,?,?,?,?,?,?,?,?,?)',[$HospitalName,$DirectorName,$Address,$Country,$City,$State,$PostalCode,$Email,$PhoneNo,$MobileNo,$Fax,$URL]);

        
        if(count($save)){
            echo "<div class='form'>
            <h3>Hospital details are added successfully.</h3><br/>
            <p class='link'> go back to <a href='/hospitaldetails'> Previous </a>page</p>
            </div>";
        }else {
            "<div class='form'>
                <h3>Error encountered</h3><br/>
                <p class='link'>Click here to <a href='/hospitaldetails'>try again </a> </p>
                </div>";
        }
    }

    
}

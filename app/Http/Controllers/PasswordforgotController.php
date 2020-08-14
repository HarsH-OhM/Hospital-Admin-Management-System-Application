<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\facades\URL;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Input;


class PasswordforgotController extends Controller
{
    //
    public function pass(request $request){

        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        // $confirm_password = Hash::make($request->input('confirm_password'));
        $user = DB::table('users')->where('email', $email)->first();
        

        if (($user)) {
            

             $pass2 = DB::table('users')->where('email', $email)->update(['password' => ($password)]);
            // $pass2->password = Hash::make(Input::get('password'));
            // $pass2->save();

            // user found
            echo "<div class='form'>
            <h3>Successfully updated a password.</h3><br/>
            <p class='link'>Now go to  <a href='/login'>Login</a> page and login to your account.</p>
            </div>";

            

         }else{
             echo "<div class='form'>
             <h3>error encountered, please try again</h3><br/>
             <p class='link'>try again  <a href='/reset_password'>Forgot Password</a> or go to <a href='/login'>Login</a> page</p>
             </div>";
         }

    
    }

    public function pass2(request $request){

        $email = $request->input('email');
        $password = $request->input('password');
        // $confirm_password = Hash::make($request->input('confirm_password'));
        $user = DB::table('user2s')->where('email', $email)->first();
        

        if (($user)) {
            

             $pass2 = DB::table('user2s')->where('email', $email)->update(['password' => ($password)]);
            // $pass2->password = Hash::make(Input::get('password'));
            // $pass2->save();

            // user found
            echo "<div class='form'>
            <h3>Successfully updated a password.</h3><br/>
            <p class='link'>Now go to  <a href='/login2'>Login</a> page and login to your account.</p>
            </div>";

            

         }else{
             echo "<div class='form'>
             <h3>error encountered, please try again</h3><br/>
             <p class='link'>try again  <a href='/reset_password2'>Forgot Password</a> or go to <a href='/login'>Login</a> page</p>
             </div>";
         }

    
    }
}

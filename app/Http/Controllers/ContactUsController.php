<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
use Illuminate\Support\Facades\Validator;




use Mail;
use Session;
 
class ContactUSController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('contact-us');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request)
   {


      

       $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required'
        ]);
 
      ContactUS::create($request->all()); 
   
    \Mail::send('emails.contact-us',
       array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
           'user_message' => $request->get('message')
       ), function($message) use ($request)
   {

    $email = $request->input('email');
      $message->from($email);
      $message->to('drsushilophthal@gmail.com', 'Admin');
      $message->subject('Contact Details:');
   });
 
    return back()->with('success', 'Thanks for contacting us!'); 
   }


//for a try button is in updateappointment page.
   public function postContact(Request $request){

    // dd($request->all());
    // '$text'->$request->$text;
    // $this->validate($request, ['email' => 'required|email'] );

    
    // $data = array(
        
    //   'email' => $request->get('email')
       
    // );

    
if(isset($_POST))
{
    //Contains the string "My value"
   // $myValue = $_POST['myValue3'];
    //Do something with your POST

  //  $data = array(
        
  //     'PatientId' => $request->get('myValue1'),
  //     'ApplicationId' => $request->get('myValue2')

       
  //   );
    //$email = $request->input('email');
//     if(isset($_POST))
// {
//     foreach($_POST as $inputName => $inputValue)
//     {
//         echo $inputName; //This is the name of an input field
//         echo $inputValue; //This is the value of the input field 

//     }
// }
   // echo $myValue;

//     $data = []; // empty array for collect customised inputs

// foreach($request->all() as $input_key => $input_value){ // split input one by one

//      $data[] = array( //customised inputs
//             // "id" => $input_key,
//             "value" => $input_value
//             // 'PatientId' => $request->get('myValue1'),
//             //  'ApplicationId' => $request->get('myValue2')

//      );
// } 

// $result = json_encode($data); //convert to json

// echo $result;

    
}

    

    Mail::send('emails.addappointmentmail', ['request' => $request], function($data) use ($request){
        $data->from('drsushilophthal@gmail.com');
        
        $data->to($request->get('email'));
        $data->subject('Appointment Details:');
        // $data->subject('Appointment Details:' . $request->date);
    });

    return response()->json(['success' => 'Your E-mail was sent! Allegedly.'], 200);

}

public function exa(Request $request){

  $text= $request->dataval;
  return $text;
  
}



}
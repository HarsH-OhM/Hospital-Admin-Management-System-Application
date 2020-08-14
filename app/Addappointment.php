<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addappointment extends Model
{
    //
    public $table = 'appointment';
	 
	public $fillable = ['Patient_name','PatientId','phone','atype'];
}
?>
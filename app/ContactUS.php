<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUS extends Model
{
    //
    public $table = 'contact_us';
	 
	public $fillable = ['name','email','phone','message'];
}
?>
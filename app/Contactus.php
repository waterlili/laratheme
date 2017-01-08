<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
	  protected $fillable = ['name','email','phone','message'];

    //
  public function addContact($contact)
  {
  	  // protected $fillable = ['username','email','phone','message'];

  	# code...
  	 return $contact->save();
  }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
  use Notifiable;

  protected $guard ='admin';
  
  protected $fillable =[
    'first_name','last_name','email','password', 'profile_pic',
  ];

  protected $hidden = [
    'password', 'remember_token','account_type',
  ];
    //

}

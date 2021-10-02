<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as AdminAuthenticated;
use Illuminate\Notifications\Notifiable;

class Admin extends AdminAuthenticated
{
    use Notifiable;

    protected $table = 'admins';
    protected $guarded=array();
   // protected $fillable=['name','email','password','created_at','updated_at'];

}

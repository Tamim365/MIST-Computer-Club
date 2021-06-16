<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

   protected $table ='admins';
   public $incrementing = false;
    // public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'Admin_Id';


    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model

{
    protected $table = 'courses';
    public $incrementing = false;
<<<<<<< HEAD
     public $timestamps = false;
    // protected $table = 'admins';
=======
     // public $timestamps = false;
     // protected $table = 'admins';
>>>>>>> e27b92ad31d9513955afff4aabc2bddd2f7506cd

    protected $primaryKey = 'Course_Id';
    //protected $dates = ['start_date'];
    use HasFactory;
}

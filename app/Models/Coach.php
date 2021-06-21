<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{

    protected $table ='coaches';
   public $incrementing = false;
   public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'coach_id';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club_Budget extends Model
{
    protected $table = 'Club_Budget';
    public $incrementing = false;
     // public $timestamps = false;
     // protected $table = 'admins';

     protected $primaryKey = 'Budget_Id';
    use HasFactory;
}

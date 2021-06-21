<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fest extends Model
{
    protected $table = 'fests';
    public $incrementing = false;
    public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'Fest_Id';
    //protected $dates = ['start_date'];
    use HasFactory;
}

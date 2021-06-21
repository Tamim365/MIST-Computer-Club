<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    protected $table ='contests';
   public $incrementing = false;
   public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'contest_name';
    use HasFactory;
}

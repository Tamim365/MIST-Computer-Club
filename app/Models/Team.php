<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table ='teams';
   public $incrementing = false;
   public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'team_id';
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamContest extends Model
{
    protected $table = 'team_contests';
    public $incrementing = false;
    public $timestamps = false;
    // protected $table = 'admins';

    // protected $primaryKey = 'Course_Id';
    //protected $dates = ['start_date'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    protected $primaryKey = 'Club_Id';
    public $incrementing = false;
    public $timestamps = false;
    use HasFactory;
}

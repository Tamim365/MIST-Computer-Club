<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'Club_Id';
    protected $casts = [
        'created_at' => 'datetime:d/m/Y', // Change your format
        'updated_at' => 'datetime:d/m/Y',
    ];
    // // public $incrementing = false;
    // public $timestamps = false;
    use HasFactory;
}

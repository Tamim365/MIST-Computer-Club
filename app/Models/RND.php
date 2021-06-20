<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RND extends Model
{
    protected $table ='r_n_d_s';
   public $incrementing = false;
   public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'project_id';
    use HasFactory;
}

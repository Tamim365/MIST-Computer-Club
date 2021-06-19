<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
protected $table ='budgets';
   public $incrementing = false;
   public $timestamps = false;
    // protected $table = 'admins';

    protected $primaryKey = 'Budget_Id';
    use HasFactory;
}

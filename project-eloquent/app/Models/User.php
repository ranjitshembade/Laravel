<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestramps = false;

    protected $guarded = []; //pass any column name in this fuction doesnt save value

    // protected $fillable = ['name' ,'email', 'age','city']; //save values of only pass column name in this fuction
}

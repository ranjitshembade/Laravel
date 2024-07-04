<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $fillable = ['name', 'email', 'age', 'city'];
}

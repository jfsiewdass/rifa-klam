<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NumberRange extends Model
{
    use HasFactory;
    protected $fillable = ['range'];
}

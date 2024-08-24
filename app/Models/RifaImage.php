<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RifaImage extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'order', 'type', 'rifa_id'];
}

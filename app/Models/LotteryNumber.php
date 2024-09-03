<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LotteryNumber extends Model
{
    use HasFactory;
    
    protected $fillable = ['number', 'lottery_id', 'voucher_id', 'status_number_id', 'is_winner'];
}

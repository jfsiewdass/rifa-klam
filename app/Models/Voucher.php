<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = ['lottery_id', 'day_rate_id', 'name', 'surname', 'phone', 'amount', 'email', 'document', 'status_voucher_id', 'payment_type', 'reference_number', 'capture', 'is_winner', 'user_id', 'bank_id'];

    public function lotteryNumbers()
    {
       return $this->hasMany(LotteryNumber::class);
    }

    public function status_voucher()
    {
       return $this->belongsTo(StatusVoucher::class);
    }
}

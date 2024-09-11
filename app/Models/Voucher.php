<?php

namespace App\Models;

use Carbon\Carbon;
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
    protected $appends = ['unique_id'];
    
    public function getUniqueIdAttribute()
    {
        $year = Carbon::parse($this->created_at)->year;
        $lastTwoDigits = substr($year, -2);
        $idString = (string)$this->id;
        $zerosToAdd = 10 - strlen($lastTwoDigits) - strlen($idString);
        $zeros = str_repeat('0', $zerosToAdd);

        return $lastTwoDigits . $zeros . $idString;
    }
}

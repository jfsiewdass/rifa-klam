<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = ['lottery_id', 'day_rate_id', 'name', 'surname', 'phone', 'bank_code', 'amount', 'document', 'status_voucher_id', 'payment_type', 'reference_number'];
}
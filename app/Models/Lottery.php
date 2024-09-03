<?php
  
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Lottery extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'detail', 'number_range', 'date', 'user_id', 'images', 'unique_id', 'amount', 'status_lottery_id', 'winner'
    ];
    protected $appends = ['unique_id'];

    public function getUniqueIdAttribute()
    {
        $year = Carbon::parse($this->created_at)->year;
        $lastTwoDigits = substr($year, -2);
        $idString = (string)$this->id;
        $zerosToAdd = 6 - strlen($lastTwoDigits) - strlen($idString);
        $zeros = str_repeat('0', $zerosToAdd);

        return $lastTwoDigits . $zeros . $idString;
    }

    public function lotteryNumbers()
    {
       return $this->hasMany(LotteryNumber::class);
    }

    public function vouchers()
    {
       return $this->hasMany(Voucher::class);
    }

    public function winnerVoucher()
    {
       return $this->hasMany(Voucher::class)->where('is_winner', true);
    }
}

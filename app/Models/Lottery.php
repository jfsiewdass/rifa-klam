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
        'name', 'detail', 'number_range', 'start_date', 'end_date', 'user_id', 'images', 'unique_id', 'amount'
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
}

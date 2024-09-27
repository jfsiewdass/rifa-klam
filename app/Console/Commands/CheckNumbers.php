<?php

namespace App\Console\Commands;

use App\Models\LotteryNumber;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class CheckNumbers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-numbers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'review all expired numbers and delete them';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        try {
            $minutes = env('MINUTES');
            $minutesAgo = now()->subMinutes($minutes)->subSeconds(10);
            $numbers = LotteryNumber::where('voucher_id', null)
            ->where('status_number_id', 1)
            ->where('created_at', '<', $minutesAgo)
            ->whereHas('lottery', function($q) {
                $q->where('status_lottery_id', 1);
            });
    
            if ($numbers->count() > 0) {
                Log::error('CheckNumbers Command -> numbers: '.$numbers->count());
                $numbers->delete();
            }
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('CheckNumbers Command -> '.$th->getMessage());
        }

    }
}

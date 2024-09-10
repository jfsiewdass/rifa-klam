<?php

namespace Database\Seeders;

use App\Models\NumberRange;
use App\Models\StatusLottery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusNumber;
use App\Models\StatusVoucher;

class CreateStatusNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (['DISPONIBLE', 'CULMINADO'] as $status) {
            StatusLottery::create(['description' => $status]);
        }
        foreach (['RESERVADO', 'PENDIENTE', 'PAGADO', 'RECHAZADO'] as $status) {
            StatusNumber::create(['description' => $status]);
        }
        foreach (['PENDIENTE', 'PAGADO', 'RECHAZADO'] as $status) {
            StatusVoucher::create(['description' => $status]);
        }
        foreach ([100, 1000, 10000] as $range) {
            NumberRange::create(['range' => $range]);
        }
    }
}

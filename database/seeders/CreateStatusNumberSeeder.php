<?php

namespace Database\Seeders;

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
        foreach (['RESERVADO', 'PENDIENTE', 'PAGADO'] as $status) {
            StatusNumber::create(['description' => $status]);
       }
       foreach (['PENDIENTE', 'PAGADO'] as $status) {
        StatusVoucher::create(['description' => $status]);
   }
    }
}

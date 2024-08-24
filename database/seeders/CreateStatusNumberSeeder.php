<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StatusNumber;
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
    }
}

<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Banner::create([
            'title_white_one' => 'Puedes ser tu el', 
            'title_white_two' => 'proximo',
            'title_green' => 'ganador?',
            'description' => "Now's your chance to win a car! Check out the prestige cars you can win in our car prize draws. Will you be our next lucky winner?"
        ]);
    }
}

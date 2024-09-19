<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $payments = [
            new class() { 
                public $type = 'TRANSFERENCIA'; 
                public $account = '01050135111135029008'; 
                public $name = 'DOMINGUEZ CEGARRA AVELINO ANT';
                public $document = '15049269';
                public $bank = 'Mercantil';
                public $phone = null;
            },
            new class() { 
                public $type = 'TRANSFERENCIA'; 
                public $bank = '0105 - Mercantil';
                public $document = '15049269';
                public $phone = '04141178346';
                public $name = null; 
                public $account = null; 
            },
        ];
        foreach ($payments as $payment) {
            PaymentType::create([
                'type' => $payment->type, 
                'name' => $payment->name,
                'account' => $payment->account,
                'document' => $payment->document,
                'phone' => $payment->phone,
                'bank' => $payment->bank,
            ]);
        }
    }
}

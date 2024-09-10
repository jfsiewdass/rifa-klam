<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $banks = [
            new class('Banco Central de Venezuela', '0001') { public $name = 'Banco Central de Venezuela'; public $code = '0001'; },
            new class('Banco de Venezuela', '0102') { public $name = 'Banco de Venezuela'; public $code = '0102'; },
            new class('Banco Venezolano de Crédito', '0104') { public $name = 'Banco Venezolano de Crédito'; public $code = '0104'; },
            new class('Banco Mercantil', '0105') { public $name = 'Banco Mercantil'; public $code = '0105'; },
            new class('Banco Provincial', '0108') { public $name = 'Banco Provincial'; public $code = '0108'; },
            new class('Bancaribe', '0114') { public $name = 'Bancaribe'; public $code = '0114'; },
            new class('Banco Exterior', '0115') { public $name = 'Banco Exterior'; public $code = '0115'; },
            new class('Banco Occidental de Descuento', '0116') { public $name = 'Banco Occidental de Descuento'; public $code = '0116'; },
            new class('Banco Caroní', '0128') { public $name = 'Banco Caroní'; public $code = '0128'; },
            new class('Banesco', '0134') { public $name = 'Banesco'; public $code = '0134'; },
            new class('Sofitasa', '0137') { public $name = 'Sofitasa'; public $code = '0137'; },
            new class('Banco Plaza', '0138') { public $name = 'Banco Plaza'; public $code = '0138'; },
            new class('Banco de la Gente Emprendedora', '0146') { public $name = 'Banco de la Gente Emprendedora'; public $code = '0146'; },
            new class('Banco del Pueblo Soberano', '0149') { public $name = 'Banco del Pueblo Soberano'; public $code = '0149'; },
            new class('Banco Fondo Común', '0151') { public $name = 'Banco Fondo Común'; public $code = '0151'; },
            new class('100% Banco', '0156') { public $name = '100% Banco'; public $code = '0156'; },
            new class('Banco Del Sur', '0157') { public $name = 'Banco Del Sur'; public $code = '0157'; },
            new class('Banco del Tesoro', '0163') { public $name = 'Banco del Tesoro'; public $code = '0163'; },
            new class('Banco Agrícola de Venezuela', '0166') { public $name = 'Banco Agrícola de Venezuela'; public $code = '0166'; },
            new class('Bancrecer', '0168') { public $name = 'Bancrecer'; public $code = '0168'; },
            new class('Mi Banco', '0169') { public $name = 'Mi Banco'; public $code = '0169'; },
            new class('Banco Activo', '0171') { public $name = 'Banco Activo'; public $code = '0171'; },
            new class('Bancamiga', '0172') { public $name = 'Bancamiga'; public $code = '0172'; },
            new class('Banplus', '0173') { public $name = 'Banplus'; public $code = '0173'; },
            new class('Banco Bicentenario', '0174') { public $name = 'Banco Bicentenario'; public $code = '0174'; },
            new class('Banco de la Fuerza Armada Nacional Bolivariana', '0177') { public $name = 'Banco de la Fuerza Armada Nacional Bolivariana'; public $code = '0177'; },
            new class('City Bank N.A.', '0190') { public $name = 'City Bank N.A.'; public $code = '0190'; },
            new class('Banco Nacional de Crédito', '0191') { public $name = 'Banco Nacional de Crédito'; public $code = '0191'; },
            new class('Instituto Profesional de Crédito Popular', '0601') { public $name = 'Instituto Profesional de Crédito Popular'; public $code = '0601'; }
        ];
        
        
        foreach ($banks as $bank) {
            Bank::create(['name' => $bank->name, 'code' => $bank->code]);
        }
        
    }
}


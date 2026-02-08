<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comprobante; // 👈 IMPORTANTE

class ComprobanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comprobante::insert([
            [
                'tipo_comprobante' => 'Boleta'
            ],
            [
                'tipo_comprobante' => 'Factura'
            ]
        ]);
    }
}

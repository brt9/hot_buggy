<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotPraiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'id_praia' => '1',
                'praia' => 'Ponta Negra (Praia Urbana)',
            ],
            [
                'id_praia' => '3',
                'praia' => 'Areia Preta (Praia Urbana)',
            ],
            [
                'id_praia' => '4',
                'praia' => 'Praia dos Artistas (Praia Urbana)',
            ],
            [
                'id_praia' => '5',
                'praia' => 'Praia do Forte (Praia Urbana)',
            ],
            [
                'id_praia' => '6',
                'praia' => 'Redinha (parada para fotos)',
            ],
            [
                'id_praia' => '7',
                'praia' => 'Santa Rita',
            ],
            [
                'id_praia' => '8',
                'praia' => 'Genipabu (parada para fotos)',
            ],
            [
                'id_praia' => '9',
                'praia' => 'Barra do Rio (próximo à travessia da balsa)',
            ],
            [
                'id_praia' => '10',
                'praia' => 'Graçandu',
            ],
            [
                'id_praia' => '11',
                'praia' => 'Pitangui',
            ],
            [
                'id_praia' => '12',
                'praia' => 'Jacumã',
            ],
            [
                'id_praia' => '13',
                'praia' => 'Porto-mirim (parada para almoço e banho)',
            ],
        ];

        DB::table('pivot_praias')->insert($data);
    }
}

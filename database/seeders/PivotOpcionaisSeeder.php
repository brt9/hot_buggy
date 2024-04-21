<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotOpcionaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'id_opcional' => 1,
                'opcional' => 'Entrada do Aquário de Natal (R$ 44 inteira)',
            ],
            [
                'id_opcional' => 1,
                'opcional' => 'Fotos com dromedários (R$ 100 inteira)',
            ],
            [
                'id_opcional' => 1,
                'opcional' => 'Esquibunda (R$ 15 por descida)',
            ],
            [
                'id_opcional' => 1,
                'opcional' => 'Aerobunda (R$ 15 por descida)',
            ],
            [
                'id_opcional' => 1,
                'opcional' => 'Kamikase (R$ 15 por descida)',
            ],
            [
                'id_opcional' => 1,
                'opcional' => 'Almoço (Miramar R$ 85 p/pessoa)',
            ],
            [
                'id_opcional' => 1,
                'opcional' => 'OBS.: Valores sujeitos a alteração de acordo com o período.',
            ],
            [
                'id_opcional' => 2,
                'opcional' => 'Alimentos e bebidas',
            ],
            [
                'id_opcional' => 2,
                'opcional' => 'Passeio de lancha para a Baia dos Golfinhos (R$ 60,00 p/pessoa)',
            ],
            [
                'id_opcional' => 2,
                'opcional' => 'OBS.: Valores sujeitos a alteração de acordo com o período.',
            ],
            [
                'id_opcional' => 3,
                'opcional' => 'Maior Cajueiro do Mundo(opcional de 8,00 por pessoa)',
            ],
            [
                'id_opcional' => 3,
                'opcional' => 'OBS.: Valores sujeitos a alteração de acordo com o período.',
            ]
        ];

        DB::table('pivot_opcionais')->insert($data);
    }
}

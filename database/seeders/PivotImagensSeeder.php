<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PivotImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_imagen' => 1,
                'imagen' => 'https://www.hotbuggy.com.br/images/buggy_1.jpg',
            ],
            [
                'id_imagen' => 1,
                'imagen' => 'https://www.hotbuggy.com.br/images/gallery-3.jpg',
            ],
            [
                'id_imagen' => 1,
                'imagen' => 'https://www.hotbuggy.com.br/images/gallery-1.jpg',
            ],
            [
                'id_imagen' => 1,
                'imagen' => 'https://www.hotbuggy.com.br/images/buggy_2.jpg',
            ],
            [
                'id_imagen' => 1,
                'imagen' => 'https://www.hotbuggy.com.br/images/buggy.jpg',
            ],
            [
                'id_imagen' => 2,
                'imagen' => 'https://www.hotbuggy.com.br/images/pipa_1.jpg',
            ],
            [
                'id_imagen' => 2,
                'imagen' => 'https://www.hotbuggy.com.br/images/pipa_2.jpg',
            ],
            [
                'id_imagen' => 2,
                'imagen' => 'https://www.hotbuggy.com.br/images/pipa_3.jpg',
            ],
            [
                'id_imagen' => 2,
                'imagen' => 'https://www.hotbuggy.com.br/images/pipa_4.jpg',
            ],
            [
                'id_imagen' => 2,
                'imagen' => 'https://www.hotbuggy.com.br/images/pipa_5.jpg',
            ],
            [
                'id_imagen' => 3,
                'imagen' => 'https://www.hotbuggy.com.br/images/sul_1.jpg',
            ],
            [
                'id_imagen' => 3,
                'imagen' => 'https://www.hotbuggy.com.br/images/sul_2.jpg',
            ],
            [
                'id_imagen' => 3,
                'imagen' => 'https://www.hotbuggy.com.br/images/sul_3.jpg',
            ],
            [
                'id_imagen' => 3,
                'imagen' => 'https://www.hotbuggy.com.br/images/sul_4.jpg',
            ],
            [
                'id_imagen' => 3,
                'imagen' => 'https://www.hotbuggy.com.br/images/sul_5.jpg',
            ],
        ];

        // Insere os dados na tabela pivot_imagens
        DB::table('pivot_imagens')->insert($data);
    }
}

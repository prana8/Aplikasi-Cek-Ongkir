<?php

namespace Database\Seeders;

use App\Models\kurir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KurirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        kurir::insert([
            [
                'code' => 'JNE',
                'title' => 'Jalur Nugraha Ekakurir (JNE)'
            ],
            [
                'code' => 'Pos Aja',
                'title'=> 'Pos Indonesia'
            ],
            [
                'code' => 'TIKI',
                'title' => 'Citra Van Titip Kilat'
            ]
        ]);
    }
}

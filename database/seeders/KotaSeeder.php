<?php

namespace Database\Seeders;

use App\Models\kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fileKota = file_get_contents(base_path('/database/Kota.json'));
        $fileKabupaten = file_get_contents(base_path("/database/Kabupaten.json"));
        $dataKota = json_decode($fileKota, true);
        $dataKabupaten = json_decode($fileKabupaten, true);

        kota::insert($dataKota);
        kota::insert($dataKabupaten);


    }
}

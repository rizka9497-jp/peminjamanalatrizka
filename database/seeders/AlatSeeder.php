<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlatSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('alats')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('alats')->insert([

            [
                'kategori_id' => 1,
                'nama_alat' => 'Proyektor Epson',
                'stok' => 5,
                'kondisi' => 'baik',
                'foto' => 'proyektor.jpg',
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_id' => 2,
                'nama_alat' => 'Bola Basket',
                'stok' => 10,
                'kondisi' => 'baik',
                'foto' => 'basket.jpg',
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kategori_id' => 3,
                'nama_alat' => 'Mikroskop',
                'stok' => 3,
                'kondisi' => 'baik',
                'foto' => 'mikroskop.jpg',
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('kategoris')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('kategoris')->insert([

            [
                'nama_kategori' => 'Elektronik',
                'deskripsi' => 'Peralatan elektronik sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_kategori' => 'Olahraga',
                'deskripsi' => 'Peralatan olahraga sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_kategori' => 'Laboratorium',
                'deskripsi' => 'Peralatan laboratorium',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
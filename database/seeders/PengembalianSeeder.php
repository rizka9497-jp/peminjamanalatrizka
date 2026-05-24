<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengembalianSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('pengembalians')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('pengembalians')->insert([

            [
                'peminjaman_id' => 1,
                'tanggal_pengembalian' => now(),
                'keterlambatan' => 0,
                'denda' => 0,
                'kondisi_kembali' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
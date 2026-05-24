<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeminjamanSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('peminjamans')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('peminjamans')->insert([

            [
                'user_id' => 3,
                'alat_id' => 1,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(3),
                'jumlah' => 1,
                'status' => 'approved',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 3,
                'alat_id' => 2,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(5),
                'jumlah' => 2,
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
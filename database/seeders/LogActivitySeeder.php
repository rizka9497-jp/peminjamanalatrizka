<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogActivitySeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('log_activities')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('log_activities')->insert([

            [
                'user_id' => 1,
                'aktivitas' => 'Admin login ke sistem',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 2,
                'aktivitas' => 'Petugas melakukan approval peminjaman',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'user_id' => 3,
                'aktivitas' => 'Peminjam melakukan peminjaman alat',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
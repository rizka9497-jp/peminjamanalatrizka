<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->insert([

            [
                'nama' => 'Administrator',
                'username' => 'admin',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Petugas Sekolah',
                'username' => 'petugas',
                'password' => Hash::make('petugas123'),
                'role' => 'petugas',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama' => 'Rizka Peminjam',
                'username' => 'peminjam',
                'password' => Hash::make('peminjam123'),
                'role' => 'peminjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
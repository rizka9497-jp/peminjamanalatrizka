<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        DB::table('users')->insert([

            [
                'id'            => 1,
                'nama'          => 'Administrator',
                'username'      => 'admin',
                'password'      => Hash::make('admin123'),
                'role'          => 'admin',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'id'            => 2,
                'nama'          => 'Petugas Sekolah',
                'username'      => 'petugas',
                'password'      => Hash::make('petugas123'),
                'role'          => 'petugas',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'id'            => 3,
                'nama'          => 'rizka aulia',
                'username'      => 'rizka',
                'password'      => Hash::make('rizka123'),
                'role'          => 'peminjam',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

            [
                'id'            => 4,
                'nama'          => 'budi utomo',
                'username'      => 'budi',
                'password'      => Hash::make('budi123'),
                'role'          => 'peminjam',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | KATEGORI
        |--------------------------------------------------------------------------
        */

        DB::table('kategoris')->insert([

            [
                'id' => 1,
                'nama_kategori' => 'Elektronik',
                'deskripsi' => 'Kategori alat elektronik sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 2,
                'nama_kategori' => 'Olahraga',
                'deskripsi' => 'Kategori alat olahraga sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 3,
                'nama_kategori' => 'Laboratorium',
                'deskripsi' => 'Kategori alat laboratorium sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 4,
                'nama_kategori' => 'Multimedia',
                'deskripsi' => 'Kategori alat multimedia sekolah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | ALAT
        |--------------------------------------------------------------------------
        */

        DB::table('alats')->insert([

            [
                'id' => 1,
                'kategori_id' => 1,
                'nama_alat' => 'Laptop Asus',
                'stok' => 10,
                'kondisi' => 'baik',
                'foto' => 'default.png',
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 2,
                'kategori_id' => 1,
                'nama_alat' => 'Proyektor Epson',
                'stok' => 5,
                'kondisi' => 'baik',
                'foto' => 'default.png',
                'status' => 'dipinjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 3,
                'kategori_id' => 2,
                'nama_alat' => 'Bola Basket',
                'stok' => 15,
                'kondisi' => 'baik',
                'foto' => 'default.png',
                'status' => 'tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 4,
                'kategori_id' => 2,
                'nama_alat' => 'Raket Badminton',
                'stok' => 8,
                'kondisi' => 'rusak ringan',
                'foto' => 'default.png',
                'status' => 'maintenance',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 5,
                'kategori_id' => 3,
                'nama_alat' => 'Mikroskop',
                'stok' => 7,
                'kondisi' => 'rusak berat',
                'foto' => 'default.png',
                'status' => 'maintenance',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | PEMINJAMAN
        |--------------------------------------------------------------------------
        */

        DB::table('peminjamans')->insert([

            [
                'id' => 1,
                'user_id' => 1,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(3),
                'status' => 'dipinjam',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 2,
                'user_id' => 2,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(5),
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 3,
                'user_id' => 3,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(2),
                'status' => 'selesai',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id' => 4,
                'user_id' => 2,
                'tanggal_pinjam' => now(),
                'tanggal_kembali' => now()->addDays(1),
                'status' => 'ditolak',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | DETAIL PEMINJAMAN
        |--------------------------------------------------------------------------
        */

        DB::table('detail_peminjamans')->insert([

            [
                'peminjaman_id' => 1,
                'alat_id' => 1,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'peminjaman_id' => 2,
                'alat_id' => 2,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'peminjaman_id' => 3,
                'alat_id' => 3,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'peminjaman_id' => 4,
                'alat_id' => 4,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            /*
             | Contoh peminjaman banyak alat
             */

            [
                'peminjaman_id' => 1,
                'alat_id' => 2,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

        /*
        |--------------------------------------------------------------------------
        | PENGEMBALIAN
        |--------------------------------------------------------------------------
        */

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

            [
                'peminjaman_id' => 3,
                'tanggal_pengembalian' => now(),
                'keterlambatan' => 2,
                'denda' => 10000,
                'kondisi_kembali' => 'baik',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
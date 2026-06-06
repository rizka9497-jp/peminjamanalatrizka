<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');

            $table->enum('role', [
                'admin',
                'petugas',
                'peminjam'
            ]);

            $table->timestamps();
        });

        /*
        |--------------------------------------------------------------------------
        | KATEGORIS
        |--------------------------------------------------------------------------
        */
        Schema::create('kategoris', function (Blueprint $table) {

            $table->id();
            $table->string('nama_kategori');
            $table->text('deskripsi')->nullable();

            $table->timestamps();
        });

        /*
        |--------------------------------------------------------------------------
        | ALATS
        |--------------------------------------------------------------------------
        */
        Schema::create('alats', function (Blueprint $table) {

            $table->id();

            $table->foreignId('kategori_id')
                ->constrained('kategoris')
                ->cascadeOnDelete();

            $table->string('nama_alat');

            $table->integer('stok');

            $table->enum('kondisi', [
                'baik',
                'rusak ringan',
                'rusak berat'
            ]);

            $table->string('foto')->nullable();

            $table->enum('status', [
                'tersedia',
                'dipinjam',
                'maintenance'
            ])->default('tersedia');

            $table->timestamps();
        });

        /*
        |--------------------------------------------------------------------------
        | PEMINJAMANS
        |--------------------------------------------------------------------------
        | 1 transaksi bisa banyak alat
        |--------------------------------------------------------------------------
        */
        Schema::create('peminjamans', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->date('tanggal_pinjam');

            $table->date('tanggal_kembali');

            $table->enum('status', [
                'pending',
                'dipinjam',
                'selesai',
                'ditolak'
            ])->default('pending');

            $table->timestamps();
        });

        /*
        |--------------------------------------------------------------------------
        | DETAIL PEMINJAMANS
        |--------------------------------------------------------------------------
        */
        Schema::create('detail_peminjamans', function (Blueprint $table) {

            $table->id();

            $table->foreignId('peminjaman_id')
                ->constrained('peminjamans')
                ->cascadeOnDelete();

            $table->foreignId('alat_id')
                ->constrained('alats')
                ->cascadeOnDelete();

            $table->integer('jumlah');

            $table->timestamps();
        });

        /*
        |--------------------------------------------------------------------------
        | PENGEMBALIANS
        |--------------------------------------------------------------------------
        */
        Schema::create('pengembalians', function (Blueprint $table) {

            $table->id();

            $table->foreignId('peminjaman_id')
                ->constrained('peminjamans')
                ->cascadeOnDelete();

            $table->date('tanggal_pengembalian');

            $table->integer('keterlambatan')
                ->default(0);

            $table->decimal('denda', 10, 2)
                ->default(0);

            $table->enum('kondisi_kembali', [
                'baik',
                'rusak ringan',
                'rusak berat'
            ]);

            $table->timestamps();
        });

        /*
        |--------------------------------------------------------------------------
        | LOG ACTIVITIES
        |--------------------------------------------------------------------------
        */
        Schema::create('log_activities', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('aktivitas');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('log_activities');
        Schema::dropIfExists('pengembalians');
        Schema::dropIfExists('detail_peminjamans');
        Schema::dropIfExists('peminjamans');
        Schema::dropIfExists('alats');
        Schema::dropIfExists('kategoris');
        Schema::dropIfExists('users');
    }
};
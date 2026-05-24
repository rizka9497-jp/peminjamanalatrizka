<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengembalians', function (Blueprint $table) {

            $table->id();

            $table->foreignId('peminjaman_id')
                ->constrained('peminjamans')
                ->cascadeOnDelete();

            $table->date('tanggal_pengembalian');

            $table->integer('keterlambatan');

            $table->decimal('denda', 10, 2);

            $table->enum('kondisi_kembali', [
                'baik',
                'rusak'
            ]);

            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengembalians');
    }
};
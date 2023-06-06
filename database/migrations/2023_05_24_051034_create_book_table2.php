<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_buku', function (Blueprint $table) {
            $table->id();
    $table->string('nama_buku', 75);
    $table->string('kategori_buku', 50);
    $table->string('penerbit_buku', 50)->nullable();
    $table->integer('tahun_buku');
    $table->integer('jumlah_buku')->default(0);
    $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_table2');
    }
};

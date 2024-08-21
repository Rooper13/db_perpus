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
        Schema::table('tb_buku', function (Blueprint $table) {
            $table->after('jumlah_buku', function ($table){
                
                $table->string('image')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_buku', function (Blueprint $table) {
            $table->dropCplumn('image');
        });
    }
};

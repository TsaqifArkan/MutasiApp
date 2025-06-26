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
        Schema::create('sk_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sk_rec_id')->constrained(
                table: 'sk_records',
                indexName: 'idx_det_sk_record'
            )->onDelete('cascade');
            $table->foreignId('jab_id')->constrained(
                table: 'jenis_jabatans',
                indexName: 'idx_det_jen_jab'
            )->onDelete('cascade');
            $table->integer('jumlah', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sk_details');
    }
};

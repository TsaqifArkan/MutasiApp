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
        Schema::create('jen_sk_recs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('j_sk_rec_id')->constrained(
                table: 'sk_records',
                indexName: 'idx_jen_sk_record'
            )->onDelete('cascade');
            $table->foreignId('j_jen_sk_id')->constrained(
                table: 'jenis_sks',
                indexName: 'idx_jen_jen_sk'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jen_sk_recs');
    }
};

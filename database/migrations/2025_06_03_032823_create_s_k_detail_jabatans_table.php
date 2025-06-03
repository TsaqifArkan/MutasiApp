<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('s_k_detail_jabatans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sk_rec_id')->constrained(
                table: 's_k_records',
                indexName: 'detail_sk_record'
            );
            $table->foreignId('jab_id')->constrained(
                table: 'jenis_jabatans',
                indexName: 'detail_jab'
            );
            $table->integer('jumlah', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_k_detail_jabatans');
    }
};

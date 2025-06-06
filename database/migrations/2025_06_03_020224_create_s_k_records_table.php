<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('s_k_records', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_sk');
            $table->string('no_sk', 50);
            $table->date('periode');
            $table->string('jenis_sk', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_k_records');
    }
};

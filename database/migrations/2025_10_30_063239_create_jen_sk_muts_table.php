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
        Schema::create('jen_sk_muts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sk_id');
            $table->foreign('sk_id')->references('id')->on('recap_skmuts')->cascadeOnDelete();
            $table->unsignedMediumInteger('jen_id');
            $table->foreign('jen_id')->references('id')->on('jen_muts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jen_sk_muts');
    }
};

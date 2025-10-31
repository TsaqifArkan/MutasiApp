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
        Schema::create('gol_pkts', function (Blueprint $table) {
            $table->unsignedSmallInteger('id', true);
            $table->primary('id');
            $table->string('pangkat', 50)->unique();
            $table->string('gol', 10)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gol_pkts');
    }
};

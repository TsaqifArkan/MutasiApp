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
        Schema::create('hist_muts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('sk_id');
            $table->foreign('sk_id')
                ->references('id')->on('recap_skmuts')
                ->cascadeOnDelete();
            $table->unsignedInteger('emp_id');
            $table->foreign('emp_id')
                ->references('id')->on('employees')
                ->cascadeOnDelete();
            $table->unsignedSmallInteger('uker_bef_id');
            $table->foreign('uker_bef_id')
                ->references('id')->on('units')
                ->cascadeOnDelete();
            $table->unsignedSmallInteger('uker_aft_id');
            $table->foreign('uker_aft_id')
                ->references('id')->on('units')
                ->cascadeOnDelete();
            $table->unsignedMediumInteger('jen_id');
            $table->foreign('jen_id')
                ->references('id')->on('jen_muts')
                ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hist_muts');
    }
};

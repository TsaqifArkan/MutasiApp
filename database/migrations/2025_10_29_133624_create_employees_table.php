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
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->primary('id');
            $table->string('nip_int', 15)->unique();
            $table->string('nip_ext', 30)->unique();
            $table->string('nip_ext_spc', 30)->unique();
            $table->string('nama', 100);
            $table->string('nama_gelar', 200);
            $table->enum('jen_kel', ['L', 'P']);
            $table->string('jabatan', 100);
            $table->string('peran', 10);
            $table->unsignedSmallInteger('gpk_id');
            $table->foreign('gpk_id')
                ->references('id')->on('gol_pkts')
                ->onDelete('cascade')
                ->index('idx_emp_gpk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};

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
        Schema::create('recap_skmuts', function (Blueprint $table) {
            $table->unsignedInteger('id', true);
            $table->primary('id');
            $table->unsignedInteger('no_sk');
            $table->string('full_no_sk', 50)->unique();
            $table->date('tgl_sk');
            $table->string('ttg_sk', 200);
            $table->string('file_sk', 200);
            $table->unsignedMediumInteger('jml_peg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recap_skmuts');
    }
};

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
        Schema::create('org_subcategs', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('nama', 100)->unique();
            $table->unsignedTinyInteger('org_categ_id');
            $table->foreign('org_categ_id')
                ->references('id')->on('org_categs')
                ->onDelete('cascade')
                ->index('idx_org_subcateg_org_categ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_subcategs');
    }
};

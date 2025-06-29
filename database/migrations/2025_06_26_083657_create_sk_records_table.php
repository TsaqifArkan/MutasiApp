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
        Schema::create('sk_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('sk_typ_id');
            $table->foreign('sk_typ_id')
                ->references('id')->on('sk_types')
                ->onDelete('cascade')
                ->index('idx_sk_record_sk_type');
            $table->unsignedTinyInteger('og_cat_id')->nullable();
            $table->foreign('og_cat_id')
                ->references('id')->on('org_categs')
                ->onDelete('cascade')
                ->index('idx_sk_record_org_categ');
            $table->unsignedTinyInteger('ap_rsn_id')->nullable();
            $table->foreign('ap_rsn_id')
                ->references('id')->on('aps_reasons')
                ->onDelete('cascade')
                ->index('idx_sk_record_aps_reason');
            $table->unsignedTinyInteger('og_sct_id')->nullable();
            $table->foreign('og_sct_id')
                ->references('id')->on('org_subcategs')
                ->onDelete('cascade')
                ->index('idx_sk_record_org_subcateg');
            $table->unsignedTinyInteger('gol_id')->nullable();
            $table->foreign('gol_id')
                ->references('id')->on('golongans')
                ->onDelete('cascade')
                ->index('idx_sk_record_golongan');
            $table->unsignedSmallInteger('jab_id')->nullable();
            $table->foreign('jab_id')
                ->references('id')->on('jabatans')
                ->onDelete('cascade')
                ->index('idx_sk_record_jabatan');
            $table->date('tgl_sk');
            $table->string('no_sk', 50)->unique();
            $table->integer('jml_asn', false, true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sk_records');
    }
};

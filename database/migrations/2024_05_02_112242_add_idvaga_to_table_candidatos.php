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
        Schema::table('candidatos', function (Blueprint $table) {
            $table->unsignedBigInteger("idvaga")->nullable();
            $table->foreign('idvaga')->references('id')->on('vagas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('candidatos', function (Blueprint $table) {
            $table->unsignedBigInteger("idvaga")->nullable();
            $table->foreign('idvaga')->references('id')->on('vagas');
        });
    }
};

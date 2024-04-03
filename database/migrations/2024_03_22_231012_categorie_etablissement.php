<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('type_etablissements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('etablissement_id');
            $table->unsignedBigInteger('type_id');
            $table->timestamps();

            $table->foreign('etablissement_id')->references('id')->on('etablissements')->onUpdate('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_etablissements');

    }
};

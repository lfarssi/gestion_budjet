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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string("DDRP");
            $table->string("CIN");
            $table->string("nomFr");
            $table->string("nomAr");
            $table->unsignedBigInteger("etabs");
            $table->unsignedBigInteger("grade");
            $table->unsignedBigInteger("fonction");
            $table->unsignedBigInteger("matiere");
            $table->boolean("actif");
            $table->string("RIB");
            $table->string("fichier");
            $table->unsignedBigInteger("taux");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};

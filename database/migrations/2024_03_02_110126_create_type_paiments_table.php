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
        Schema::create('type_paiments', function (Blueprint $table) {
            $table->integer("idP")->primary();
            $table->string("libelle");
            $table->unsignedBigInteger("jurie");
            $table->unsignedBigInteger("budjet");
            $table->decimal("prixCopie");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_paiments');
    }
};

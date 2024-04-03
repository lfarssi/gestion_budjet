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
        Schema::create('budjets', function (Blueprint $table) {
            $table->unsignedBigInteger("idB")->primary();
            $table->string("typeBudjet");
            $table->integer("montant");
            $table->date("dateBudjet");
            $table->year("année");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budjets');
    }
};

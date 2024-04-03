<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailsCorrectionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('details_corrections', function (Blueprint $table) {
            $table->foreign('person')->references('id')->on('personnels')->onUpdate('cascade');
            $table->foreign('jury')->references('id')->on('juries')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('details_corrections', function (Blueprint $table) {
            $table->dropForeign(['person']);
            $table->dropForeign(['jury']);
        });
    }
}
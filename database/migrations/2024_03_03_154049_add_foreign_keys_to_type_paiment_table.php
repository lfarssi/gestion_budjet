<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTypePaimentTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('type_paiments', function (Blueprint $table) {

            $table->foreign('budjet')->references('idB')->on('budjets')->onUpdate('cascade');
            $table->foreign('jurie')->references('id')->on('juries')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('type_paiments', function (Blueprint $table) {
            $table->dropForeign(['budjet']);
            $table->dropForeign(['jurie']);
        });
    }
}
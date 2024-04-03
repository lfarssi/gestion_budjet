<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEtablissementTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('etablissements', function (Blueprint $table) {

            $table->foreign('commune')->references('codeCommune')->on('communes')->onUpdate('cascade');
        });
    }
    public function down(): void
    {
        Schema::table('etablissements', function (Blueprint $table) {
            $table->dropForeign(['commune']);


        });
    }
}
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('personnels', function (Blueprint $table) {
            $table->foreign('grade')->references('idG')->on('grades')->onUpdate('cascade');
            $table->foreign('matiere')->references('idM')->on('matieres')->onUpdate('cascade');
            $table->foreign('fonction')->references('idF')->on('fonctions')->onUpdate('cascade');
            $table->foreign('etabs')->references('id')->on('etablissements')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personnels', function (Blueprint $table) {
            $table->dropForeign(['grade']);
            $table->dropForeign(['matiere']);
            $table->dropForeign(['fonction']);
            $table->dropForeign(['etabs']);
        });
    }
}
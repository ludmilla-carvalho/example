<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLanguageLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('language_lawyer', function (Blueprint $table) {
            $table->foreign('language_id', 'fk_language_lawyer_language_id')->references('id')->on('languages')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('lawyer_id', 'fk_language_lawyer_lawyer_id')->references('id')->on('lawyers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('language_lawyer', function (Blueprint $table) {
            $table->dropForeign('fk_language_lawyer_language_id');
            $table->dropForeign('fk_language_lawyer_lawyer_id');
        });
    }
}

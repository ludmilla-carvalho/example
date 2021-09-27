<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToExperienceLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('experience_lawyer', function (Blueprint $table) {
            $table->foreign('experience_id', 'fk_experience_lawyer_experience_id')->references('id')->on('experiences')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('lawyer_id', 'fk_experience_lawyer_lawyer_id')->references('id')->on('lawyers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('experience_lawyer', function (Blueprint $table) {
            $table->dropForeign('fk_experience_lawyer_experience_id');
            $table->dropForeign('fk_experience_lawyer_lawyer_id');
        });
    }
}

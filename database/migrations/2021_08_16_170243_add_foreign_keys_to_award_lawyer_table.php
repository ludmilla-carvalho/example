<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAwardLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('award_lawyer', function (Blueprint $table) {
            $table->foreign('award_id', 'fk_award_lawyer_award_id')->references('id')->on('awards')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('lawyer_id', 'fk_award_lawyer_lawyer_id')->references('id')->on('lawyers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('award_lawyer', function (Blueprint $table) {
            $table->dropForeign('fk_award_lawyer_award_id');
            $table->dropForeign('fk_award_lawyer_lawyer_id');
        });
    }
}

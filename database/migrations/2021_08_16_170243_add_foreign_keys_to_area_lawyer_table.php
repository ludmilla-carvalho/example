<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAreaLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area_lawyer', function (Blueprint $table) {
            $table->foreign('area_id', 'fk_area_lawyer_area_id')->references('id')->on('areas')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('lawyer_id', 'fk_area_lawyer_lawyer_id')->references('id')->on('lawyers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_lawyer', function (Blueprint $table) {
            $table->dropForeign('fk_area_lawyer_area_id');
            $table->dropForeign('fk_area_lawyer_lawyer_id');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCityLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('city_lawyer', function (Blueprint $table) {
            $table->foreign('city_id', 'fk_city_lawyer_city_id')->references('id')->on('cities')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('lawyer_id', 'fk_city_lawyer_lawyer_id')->references('id')->on('lawyers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('city_lawyer', function (Blueprint $table) {
            $table->dropForeign('fk_city_lawyer_city_id');
            $table->dropForeign('fk_city_lawyer_lawyer_id');
        });
    }
}

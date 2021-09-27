<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToGraduationLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('graduation_lawyer', function (Blueprint $table) {
            $table->foreign('graduation_id', 'fk_graduation_lawyer_graduation_id')->references('id')->on('graduations')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('lawyer_id', 'fk_graduation_lawyer_lawyer_id')->references('id')->on('lawyers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('graduation_lawyer', function (Blueprint $table) {
            $table->dropForeign('fk_graduation_lawyer_graduation_id');
            $table->dropForeign('fk_graduation_lawyer_lawyer_id');
        });
    }
}

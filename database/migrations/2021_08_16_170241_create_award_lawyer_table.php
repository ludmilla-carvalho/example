<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardLawyerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_lawyer', function (Blueprint $table) {
            $table->unsignedBigInteger('lawyer_id')->index('fk_award_lawyer_lawyer_id');
            $table->unsignedBigInteger('award_id')->index('fk_award_lawyer_award_id');
            $table->string('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award_lawyer');
    }
}

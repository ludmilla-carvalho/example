<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerSubtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_subtypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('lawyer_type_id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('title_en')->nullable();
            $table->string('plural')->nullable();
            $table->string('plural_en')->nullable();
            $table->string('feminine')->nullable();
            $table->string('feminine_en')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawyer_subtypes');
    }
}

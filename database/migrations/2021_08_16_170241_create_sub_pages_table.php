<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('page_id')->index();
            $table->string('name');
            $table->string('slug')->nullable()->index();
            $table->string('name_en')->nullable();
            $table->string('tit_seo')->nullable();
            $table->string('tit_seo_en')->nullable();
            $table->text('desc_seo')->nullable();
            $table->text('desc_seo_en')->nullable();
            $table->boolean('publish')->nullable()->default(0);
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('sub_pages');
    }
}

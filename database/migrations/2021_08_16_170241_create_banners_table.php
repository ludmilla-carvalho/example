<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('page_id')->nullable()->index();
            $table->unsignedBigInteger('sub_page_id')->nullable()->index();
            $table->string('image')->nullable();
            $table->string('image_mobile')->nullable();
            $table->string('title')->nullable();
            $table->string('title_en')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('sub_title_en')->nullable();
            $table->string('link')->nullable();
            $table->string('text_link')->nullable();
            $table->string('text_link_en')->nullable();
            $table->boolean('publish')->nullable()->default(0);
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
        Schema::dropIfExists('banners');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->nullable()->index();
            $table->string('name_en')->nullable();
            $table->string('icon')->nullable();
            $table->string('tit_seo')->nullable();
            $table->string('tit_seo_en')->nullable();
            $table->text('desc_seo')->nullable();
            $table->text('desc_seo_en')->nullable();
            $table->boolean('is_fixed')->nullable()->default(0);
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
        Schema::dropIfExists('pages');
    }
}

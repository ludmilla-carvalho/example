<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('title_en');
            $table->string('slug')->nullable()->index('slug');
            $table->integer('free')->nullable()->default(0);
            $table->date('date')->nullable();
            $table->time('hour')->nullable();
            $table->integer('online')->nullable()->default(0);
            $table->string('local')->nullable();
            $table->string('address')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->integer('vacancies')->nullable();
            $table->string('amount')->nullable();
            $table->integer('external')->nullable()->default(0);
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->text('text')->nullable();
            $table->text('text_en')->nullable();
            $table->integer('publish')->nullable()->default(0);
            $table->integer('highlight')->nullable()->default(0);
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
        Schema::dropIfExists('events');
    }
}

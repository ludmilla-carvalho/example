<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAreaNewsletterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('area_newsletter', function (Blueprint $table) {
            $table->foreign('area_id', 'fk_area_newsletter_area_id')->references('id')->on('areas')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('area_newsletter', function (Blueprint $table) {
            $table->dropForeign('fk_area_newsletter_area_id');
        });
    }
}

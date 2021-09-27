<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('texts', function (Blueprint $table) {
            $table->foreign('page_id', 'fk_text_page')->references('id')->on('pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('sub_page_id', 'fk_text_sub_page')->references('id')->on('sub_pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('texts', function (Blueprint $table) {
            $table->dropForeign('fk_text_page');
            $table->dropForeign('fk_text_sub_page');
        });
    }
}

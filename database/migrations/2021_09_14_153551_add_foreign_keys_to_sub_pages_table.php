<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_pages', function (Blueprint $table) {
            $table->foreign('page_id', 'fk_sub_page_page_id')->references('id')->on('pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sub_pages', function (Blueprint $table) {
            $table->dropForeign('fk_sub_page_page_id');
        });
    }
}

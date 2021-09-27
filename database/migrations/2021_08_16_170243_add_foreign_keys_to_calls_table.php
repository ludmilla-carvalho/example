<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('calls', function (Blueprint $table) {
            $table->foreign('page_id', 'fk_call_page')->references('id')->on('pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('sub_page_id', 'fk_call_sub_page')->references('id')->on('sub_pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('calls', function (Blueprint $table) {
            $table->dropForeign('fk_call_page');
            $table->dropForeign('fk_call_sub_page');
        });
    }
}

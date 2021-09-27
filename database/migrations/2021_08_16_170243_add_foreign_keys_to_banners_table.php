<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->foreign('page_id', 'fk_banner_page')->references('id')->on('pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('sub_page_id', 'fk_banner_sub_page')->references('id')->on('sub_pages')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropForeign('fk_banner_page');
            $table->dropForeign('fk_banner_sub_page');
        });
    }
}

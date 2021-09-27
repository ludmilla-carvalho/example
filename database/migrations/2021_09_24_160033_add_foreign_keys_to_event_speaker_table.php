<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('event_speaker', function (Blueprint $table) {
            $table->foreign('event_id', 'fk_event_speaker_event_id')->references('id')->on('events')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign('speaker_id', 'fk_event_speaker_speaker_id')->references('id')->on('speakers')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('event_speaker', function (Blueprint $table) {
            $table->dropForeign('fk_event_speaker_event_id');
            $table->dropForeign('fk_event_speaker_speaker_id');
        });
    }
}

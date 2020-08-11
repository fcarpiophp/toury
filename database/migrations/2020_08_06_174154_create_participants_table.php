<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->integer('eventId');
            $table->string('participantName');
            $table->integer('participantOrder');
            $table->boolean('round1')->nullable();
            $table->boolean('round2')->nullable();
            $table->boolean('round3')->nullable();
            $table->boolean('round4')->nullable();
            $table->boolean('round5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}

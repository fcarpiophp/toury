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
            $table->string('round1')->default('na');
            $table->string('round2')->default('na');
            $table->string('round3')->default('na');
            $table->string('round4')->default('na');
            $table->string('round5')->default('na');
            $table->dateTime('winDateTime')->nullable();
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

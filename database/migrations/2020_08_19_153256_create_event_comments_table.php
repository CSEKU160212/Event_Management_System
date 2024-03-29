<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_comments', function (Blueprint $table) {
            $table->id();
            $table->string('comment', 2000);
            $table->integer('eventid');
            $table->integer('userid');
            $table->timestamps();

            $table->foreign('eventid')
                    ->references('id')
                    ->on('events')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('userid')
                    ->references('id')
                    ->on('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_comments');
    }
}

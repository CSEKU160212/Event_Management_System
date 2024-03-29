<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventRegisteredMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registered_members', function (Blueprint $table) {
            $table->id();
            $table->integer('optionid');
            $table->integer('userid');
            $table->string('transactionid')->unique();
            $table->boolean('is_approved')->default(false);
            $table->timestamps();

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
        Schema::dropIfExists('event_registered_members');
    }
}

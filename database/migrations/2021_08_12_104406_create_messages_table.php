<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{

    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('guid');
            $table->foreignId('conversation_id')->references('id')->on('converstions');
            $table->foreignId('sender_id')->references('id')->on('users');
            $table->enum('message_type', ['Text', 'URL', 'File']);
            $table->string('message');
            $table->softDeletes();
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
        Schema::dropIfExists('messages');
    }
}

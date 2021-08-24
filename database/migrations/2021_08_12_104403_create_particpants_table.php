<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticpantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('particpants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conversation_id')->references('id')->on('converstions');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->enum('type', ['foo', 'bar']);
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
        Schema::dropIfExists('particpants');
    }
}

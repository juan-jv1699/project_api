<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('type_notification_id');
            $table->foreign('type_notification_id')->references('id')->on('type_notifications');
            $table->unsignedBigInteger('receiver_id');
            $table->unsignedBigInteger('transmitter_id');
            $table->foreign('receiver_id')->references('id')->on('users');
            $table->foreign('transmitter_id')->references('id')->on('users');
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
        Schema::dropIfExists('notifications');
    }
};

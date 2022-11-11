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
            $table->unsignedBigInteger('id_type_notif');
            $table->foreign('id_type_notif')->references('id')->on('type_notifications');
            $table->unsignedBigInteger('id_receiver');
            $table->unsignedBigInteger('id_transmitter');
            $table->foreign('id_receiver')->references('id')->on('users');
            $table->foreign('id_transmitter')->references('id')->on('users');
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

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthdate');
            $table->string('cc');
            $table->tinyInteger('role')->default(2);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('image')->default('https://p16-va-default.akamaized.net/img/musically-maliva-obj/1665282759496710~c5_720x720.jpeg');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};

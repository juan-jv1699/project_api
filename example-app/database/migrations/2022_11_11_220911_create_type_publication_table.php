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
        Schema::create('type_publication', function (Blueprint $table) {
            $table->unsignedBigInteger('id_publication');
            $table->unsignedBigInteger('id_type_publication');
            $table->foreign('id_publication')->references('id')->on('publications');
            $table->foreign('id_type_publication')->references('id')->on('type_publications');
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
        Schema::dropIfExists('type_publication');
    }
};

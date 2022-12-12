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
        Schema::create('images_publications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('publication_id');
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->string('img01');
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
        Schema::dropIfExists('images_publications');
    }
};

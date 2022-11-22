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
            $table->unsignedBigInteger('publication_id');
            $table->unsignedBigInteger('type_publication_id');
            $table->foreign('publication_id')->references('id')->on('publications');
            $table->foreign('type_publication_id')->references('id')->on('type_publications');
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

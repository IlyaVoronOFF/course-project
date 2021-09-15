<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('image_id')->nullable()->default(NULL);
            $table->string('name', 255);
            $table->string('alias', 255)->nullable()->default(NULL);
            $table->string('3_code', 3)->nullable()->default(NULL);
            $table->string('2_code', 2)->nullable()->default(NULL);
            $table->tinyInteger('published')->default(1);
            $table->foreign('image_id')->references('id')->on('images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}

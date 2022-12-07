<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('link', 255)->nullable();
            $table->string('image_en', 255)->nullable();
            $table->string('image_az', 255)->nullable();
            $table->string('image_ru', 255)->nullable();
            $table->integer('sort_order')->default(1);
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
        Schema::dropIfExists('slider');
    }
}

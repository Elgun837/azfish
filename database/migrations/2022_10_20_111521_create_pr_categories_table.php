<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create table for storing product categories
        Schema::create('pr_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('slug')->unique();
            $table->string('image', 255)->nullable();
            $table->string('banner', 255)->nullable();
            $table->text('description')->nullable();
            $table->enum('status', ['ACTIVE', 'PASSIVE'])->default('ACTIVE');
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
        Schema::dropIfExists('pr_categories');
    }
}

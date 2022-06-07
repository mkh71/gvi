<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_images', function (Blueprint $table) {
            $table->id();
            $table->string('home');
            $table->string('contact')->nullable();
            $table->string('about')->nullable();
            $table->string('sales')->nullable();
            $table->string('beauty')->nullable();
            $table->timestamps();
        });
        \App\PageImage::query()->create(['id'=>1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_images');
    }
}

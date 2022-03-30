<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallaries', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable();
            $table->integer('type')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('description_en')->nullable();
            $table->string('description_ar')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('gallary_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gallaries');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGallaryCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallary__categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_en')->nullable();
            $table->string('category_ar')->nullable();
            $table->string('decription_en')->nullable();
            $table->string('decription_ar')->nullable();
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('gallary__categories');
    }
}

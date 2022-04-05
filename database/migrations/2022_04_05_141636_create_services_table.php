<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('service_en')->nullable();
            $table->string('text_en')->nullable();
            $table->string('text_ar')->nullable();
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->dateTime('post_date', 6)->nullable();
            $table->string('pdf_en')->nullable();
            $table->string('pdf_ar')->nullable();
            $table->unsignedBigInteger('service_type_id');
            $table->integer('order')->nullable();
            $table->tinyInteger('active')->default(1);
            $table->timestamps();

            $table->foreign('service_type_id')->references('id')->on('service_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}

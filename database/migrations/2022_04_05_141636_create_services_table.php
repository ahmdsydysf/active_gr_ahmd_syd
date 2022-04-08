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
            $table->text('title_en')->nullable();
            $table->longText('service_en')->nullable();
            $table->longText('text_en')->nullable();
            $table->longText('text_ar')->nullable();
            $table->longText('image')->nullable();
            $table->longText('video')->nullable();
            $table->dateTime('post_date', 6)->nullable();
            $table->longText('pdf_en')->nullable();
            $table->longText('pdf_ar')->nullable();
            $table->unsignedBigInteger('service_type_id')->nullable();
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

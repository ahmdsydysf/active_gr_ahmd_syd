<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('description_en')->nullable();
            $table->string('name_ar')->nullable();
            $table->string('description_ar')->nullable();
            $table->string('image')->nullable();
            $table->string('pdf_en')->nullable();
            $table->string('pdf_ar')->nullable();
            $table->unsignedBigInteger('factory_id');
            $table->unsignedBigInteger('partner_id');
            $table->unsignedBigInteger('type_id');
            $table->tinyInteger('active')->default(1);
            $table->timestamps();

            $table->foreign('factory_id')->references('id')->on('factories');
            $table->foreign('partner_id')->references('id')->on('partners');
            $table->foreign('type_id')->references('id')->on('Product_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

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
            $table->text('name_en')->nullable();
            $table->longText('description_en')->nullable();
            $table->text('name_ar')->nullable();
            $table->longText('description_ar')->nullable();
            $table->longText('image')->nullable();
            $table->longText('pdf_en')->nullable();
            $table->longText('pdf_ar')->nullable();
            $table->unsignedBigInteger('factory_id')->nullable();
            $table->unsignedBigInteger('partner_id')->nullable();
            $table->unsignedBigInteger('type_id')->nullable();
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

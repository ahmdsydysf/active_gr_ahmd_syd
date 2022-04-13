<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_types', function (Blueprint $table) {
            $table->id();
            $table->string('type_en')->nullable()->comment('((مبيدات [-1-فطرية] [-2-حشرية] [-3- نيناتودية])) , ((اسمدة[-1- عناصر كبيري] [-2- عناصر صغري] [-3- اسمدة متخصصة])) , ((منظمات نمو[-1- منظمات نمو]))');
            $table->string('type_ar')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->longText('image')->nullable();
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('product_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_types');
    }
}

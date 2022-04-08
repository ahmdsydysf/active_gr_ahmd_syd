<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToProductType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_types', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_types', function (Blueprint $table) {
            //
        });
    }
}

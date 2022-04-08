<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->longText('overview_en')->nullable();
            $table->longText('overview_ar')->nullable();
            $table->longText('mission_en')->nullable();
            $table->longText('mission_ar')->nullable();
            $table->longText('vision_en')->nullable();
            $table->longText('vision_ar')->nullable();
            $table->longText('company_video')->nullable();
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
        Schema::dropIfExists('companies');
    }
}

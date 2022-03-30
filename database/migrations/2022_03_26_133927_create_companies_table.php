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
            $table->string('overview_en')->nullable();
            $table->string('overview_ar')->nullable();
            $table->string('mission_en')->nullable();
            $table->string('mission_ar')->nullable();
            $table->string('vision_en')->nullable();
            $table->string('vision_ar')->nullable();
            $table->string('company_video')->nullable();
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

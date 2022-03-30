<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company__contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address_en')->nullable();
            $table->string('address_ar')->nullable();
            $table->string('phones')->nullable();
            $table->string('email')->nullable();
            $table->string('fax')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('google_map')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
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
        Schema::dropIfExists('company__contacts');
    }
}

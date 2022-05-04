<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToCompanyContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('company_contacts', function (Blueprint $table) {
            //
            $table->text('address_en2')->nullable();
            $table->text('address_ar2')->nullable();
            $table->string('phones2')->nullable();
            $table->string('email2')->nullable();
            $table->longText('google_map2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_contacts', function (Blueprint $table) {
            //
        });
    }
}

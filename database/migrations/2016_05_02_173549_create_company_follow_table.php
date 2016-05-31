<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_follow', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Symbol');
            $table->string('Name');
            $table->string('LastPrice');
            $table->string('Change');
            $table->string('Volume');
            $table->string('Open');
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
        Schema::drop('company_follow');
    }
}

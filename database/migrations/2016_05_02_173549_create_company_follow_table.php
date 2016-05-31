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
            $table->string('symbol');
            $table->string('name');
            $table->string('lastPrice');
            $table->string('change');
            $table->string('volume');
            $table->string('open');
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

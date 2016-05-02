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
            $table->string('user_email');
            $table->float('money_to_buy');
            $table->float('quote_to_buy');
            $table->float('money_to_sell');
            $table->float('quote_to_sell');
            $table->float('tax_percent_to_discount');
            $table->float('result');
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

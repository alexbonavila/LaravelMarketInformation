<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSimulatorHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulator_history', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('money_to_buy');
            $table->float('quote_to_buy');
            $table->float('money_to_sell');
            $table->float('quote_to_sell');
            $table->float('percent_to_discount');
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
        Schema::drop('simulator_history');
    }
}

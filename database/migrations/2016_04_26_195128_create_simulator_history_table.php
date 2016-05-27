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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('name');
            $table->float('quantity_to_buy');
            $table->float('quote_to_buy');
            $table->float('price_to_buy');
            $table->float('quantity_to_sell');
            $table->float('quote_to_sell');
            $table->float('tax_percent_to_discount');
            $table->float('price_to_sell');
            $table->float('gains_or_losses');
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

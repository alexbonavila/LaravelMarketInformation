<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangeHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_history', function (Blueprint $table) {
            $table->string('symbol');
            $table->longText('positions');
            $table->longText('dates');
            $table->longText('values');
            $table->string('max_date');
            $table->string('min_date');
            $table->float('min_value');
            $table->float('max_value');
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
        Schema::drop('exchange_history');
    }
}

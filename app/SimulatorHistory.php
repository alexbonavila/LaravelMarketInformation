<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SimulatorHistory extends Model
{
    protected $fillable = ['user_id', 'quantity_to_buy', 'quote_to_buy', 'price_to_buy', 'quantity_to_sell', 'quote_to_sell', 'tax_percent_to_discount', 'price_to_sell', 'gains_or_losses'];
}

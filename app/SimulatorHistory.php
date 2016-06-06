<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SimulatorHistory
 * @package App
 */
class SimulatorHistory extends Model
{

    /**
     * @var string
     */
    protected $table = "simulator_history";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'quantity_to_buy',
        'quote_to_buy',
        'price_to_buy',
        'quantity_to_sell',
        'quote_to_sell',
        'tax_percent_to_discount',
        'price_to_sell',
        'gains_or_losses'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getUser()
    {
        return $this->belongsTo(User::class);
    }


}

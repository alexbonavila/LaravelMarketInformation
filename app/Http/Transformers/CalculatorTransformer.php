<?php

namespace App\Http\Transformers;


class CalculatorTransformer extends Transformer
{
    public function transform($calcul)
    {
        return [
            'user_id' => $calcul['user_id'],
            'name' => $calcul['name'],
            'quantity_to_buy' =>(Float) $calcul['quantity_to_buy'],
            'quote_to_buy' =>(Float) $calcul['quote_to_buy'],
            'price_to_buy' => (Float)$calcul['price_to_buy'],
            'quantity_to_sell' => (Float)$calcul['quantity_to_sell'],
            'quote_to_sell' => (Float)$calcul['quote_to_sell'],
            'tax_percent_to_discount' => (Float)$calcul['tax_percent_to_discount'],
            'price_to_sell' => (Float)$calcul['price_to_sell'],
            'gains_or_losses' => (Float)$calcul['gains_or_losses'],
        ];
    }
}
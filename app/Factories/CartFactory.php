<?php

namespace App\Factories;

use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class CartFactory
{

    public static function make(): Cart
    {
        if (auth()->guest()) {

            $cart = Cart::firstOrCreate([
                'session_id'=> Session::getId()
            ]);
        }

        if (auth()->user()) {
            $cart =  auth()->user()->cart?:auth()->user()->Cart()->create();
        }

        return $cart;
    }
}

<?php

namespace App\Actions\Webshop;

use App\Factories\CartFactory;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class AddProductVariantToCart
{
    public function add($variant_id)
    {
        CartFactory::make()->items()->create([
            'product_variant_id' => $variant_id,
            'quantity' => 1
        ]);

    }
}

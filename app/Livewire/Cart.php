<?php

namespace App\Livewire;

use Livewire\Component;
use App\Factories\CartFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Component
{
    public $test;
    public function getItemsProperty()
    {
        $items = CartFactory::make()->items();

        return $items;
    }
    public function render()
    {
        return view('livewire.cart');
    }
}

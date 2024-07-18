<?php

namespace App\Livewire;


use App\Actions\Webshop\AddProductVariantToCart as WebshopAddProductVariantToCart;
use App\Models\Product as ProductModel;
use App\Rules\VariantExists;
use Laravel\Jetstream\InteractsWithBanner;
use Livewire\Component;

class Product extends Component
{

    use InteractsWithBanner;
    public ProductModel $product;

    public $variant ;

    // public $rules = [
    //     'variant' => ['required' ,'exists: App\Models\ProductVariant,id' ]
    // ];

    protected function rules()
    {
        return [
            'variant' => ['required', new VariantExists],
        ];
    }

    public function submit()
    {
        $this->validate();

        // Your logic after validation passes
    }

    public function addToCart(WebshopAddProductVariantToCart $cart)
    {

        $this->validate();
        $cart->add(
            variant_id : $this->variant
        );

        $this->banner('Your product has been added to your cart');

        $this->dispatch('productAddedToCart');

    }

    public function mount()
    {
        $this->variant = $this->product->variants()->value('id');
    }

    public function render()
    {
        return view('livewire.product');
    }
}

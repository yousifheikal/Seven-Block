<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class WishlistComponent extends Component
{

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem){

            if ($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
            }
        }

        toastr()->warning('Item removed in Wishlist');
        return redirect()->route('product.wishlist');
    }


    public function render()
    {
        return view('livewire.wishlist-component')->layout('layout.base');
    }
}

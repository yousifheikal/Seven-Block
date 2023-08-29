<?php

namespace App\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartComponent extends Component
{

    public function render()
    {
        return view('livewire.cart-component')->layout('layout.base');
    }

    public function increaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty + 1 ;
        Cart::instance('cart')->update($rowId, $qty);
        toastr()->warning('Item has been increasing');
        return redirect()->route('product.cart');
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty - 1 ;
        Cart::instance('cart')->update($rowId, $qty);
        toastr()->warning('Item has been decreasing');
        return redirect()->route('product.cart');
    }

    public function destroy($rowId)
    {
        Cart::instance('cart')->remove($rowId);
        toastr()->error('Item has been removed');
        session()->flash('success_message', 'Item has been removed');
        return redirect()->route('product.cart');
    }

    public function destroyAll()
    {
        Cart::instance('cart')->destroy();
        toastr()->error('Items has been removed');
        session()->flash('success_message', 'Items has been removed');
        return redirect()->route('product.cart');
    }

    public function checkout()
    {
        return redirect()->route('checkout');
    }

}

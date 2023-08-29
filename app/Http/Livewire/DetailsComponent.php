<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Review;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $slug ;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate(Product::class);
        toastr()->info('Item added in wishlist');
        return redirect()->back();

    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem){

            if ($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
            }
        }
        return redirect()->back();
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate(Product::class);
        session()->flash('success_message', 'Item added in cart');
        toastr()->success('Item added in cart');
        return redirect()->route('product.cart');

    }


    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(9)->get();
        $reviews = Review::where('project_slug', $this->slug)->get();

        return view('livewire.details-component', ['product' => $product, 'popular_products' => $popular_products,
            'related_products'=>$related_products, 'reviews' => $reviews])->layout('layout.base');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CategoryComponent extends Component
{
    public $slug;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate(Product::class);
        toastr()->info('Item added in wishlist');
        return redirect()->route('shop');
    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem){

            if ($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
            }
        }
        return redirect()->route('shop');
    }

    public function render()
    {
        $category = Category::where('slug', $this->slug)->first();
        $category_id = $category->id;
        $category_name = $category->name;

        $products = Product::where('category_id', $category_id)->get();
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $categories = Category::all();

        return view('livewire.category-component', ['products' => $products, 'popular_products' => $popular_products, 'categories' => $categories, 'category_name' => $category_name])->layout('layout.base');    }
}

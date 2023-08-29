<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Gloudemans\Shoppingcart\Facades\Cart;
use function Termwind\render;

class ShopComponent extends Component
{

//    public $sorting;
//    public $pagesize;
//
//    public function mount()
//    {
//        $this->sorting = 'default';
//        $this->pagesize = 12;
//    }

    public function addToWishlist($product_id, $product_name, $product_price)
    {
        Cart::instance('wishlist')->add($product_id, $product_name, 1, $product_price)->associate(Product::class);
        toastr()->success('Item added in wishlist');
        return redirect()->route('shop');

    }

    public function removeFromWishlist($product_id)
    {
        foreach (Cart::instance('wishlist')->content() as $witem){

            if ($witem->id == $product_id){
                Cart::instance('wishlist')->remove($witem->rowId);
            }
        }
        toastr()->warning('Item removed in Wishlist');
        return redirect()->route('shop');
    }

    use WithPagination;
    public function render()
    {
//        if ($this->sorting == 'date'){
//
//            $products = Product::orderBy('created_at', 'DESC')->paginate($this->pagesize);
//        }
//        elseif ($this->sorting == 'price'){
//
//            $products = Product::orderBy('regular_price', 'ASC')->paginate($this->pagesize);
//        }
//        elseif ($this->sorting == 'price-desc'){
//
//            $products = Product::orderBy('regular_price', 'DESC')->paginate($this->pagesize);
//        }
//        else{
//            $products = Product::paginate($this->pagesize);
//        }

        $products = Product::paginate(12);
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        $categories = Category::all();

        return view('livewire.shop-component', ['products' => $products, 'popular_products' => $popular_products, 'categories' => $categories])->layout('layout.base');
    }
}

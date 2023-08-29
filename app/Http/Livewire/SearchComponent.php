<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;
    public $product_cat;
    public $product_cat_id;
        public function mount()
    {
        $this->fill(request()->only('search', 'product_cat', 'product_cat_id'));
    }

    public function render()
    {

        $products = Product::where('name', 'like', '%'.$this->search.'%')->where('category_id', 'like', '%'.$this->product_cat_id.'%')->paginate(12);
        $popular_products = Product::inRandomOrder()->limit(4)->get();

        $categories = Category::all();

        return view('livewire.search-component', ['products' => $products, 'popular_products' => $popular_products, 'categories' => $categories])->layout('layout.base');
    }
}

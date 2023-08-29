<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $popular_products =  Product::inRandomOrder()->limit(10)->get();
        $category_bedroom =  Product::where('category_id', 1)->get();
        $category_lounge =   Product::where('category_id', 2)->get();
        $category_saloon =   Product::where('category_id', 3)->get();
        $category_bathroom = Product::where('category_id', 4)->get();


        return view('livewire.home-component', ['popular_products' => $popular_products, 'bedrooms' => $category_bedroom,
            'lounges' => $category_lounge, 'saloons' => $category_saloon, 'bathrooms' => $category_bathroom])->layout('layout.base');
    }
}

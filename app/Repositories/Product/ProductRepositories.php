<?php

namespace App\Repositories\Product;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductRepositories implements ProductRepositoriesInterface
{
    public function index()
    {
        // TODO: Implement index() method.
        $products = Product::all();
        return view('pages_dashboard.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages_dashboard.product.create', compact('categories'));
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $Validate = $request->validate([
            'name' => 'required|max:255',
            'stock_status' => 'required',
            'regular_price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        try{

            $product = new Product();

            $product->user = Auth::user()->name;
            $product->name = $request->name;
            $product->slug = Str::slug($request->name);
            $product->description = $request->description;
            $product->regular_price = $request->regular_price;
            $product->sale_price = $request->sale_price;
            $product->stock_status = $request->stock_status;
            $product->image = $request->image;
            $product->category_id = $request->category_id;
            $product->save();

            toastr()->info('Product created Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('pages_dashboard.product.edit', compact('product', 'categories'));
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.

        $Validate = $request->validate([
            'name' => 'required|max:255',
            'stock_status' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ]);

        try{

            $product = Product::findOrfail($id);

            $product->update([

            'user' => Auth::user()->name,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'regular_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'stock_status' => $request->stock_status,
            'image' => $request->image,
            'category_id' => $request->category_id,
            ]);

            toastr()->info('Product updated Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        try {

            Product::find($id)->delete();

            toastr()->error('Product deleted');
            return redirect()->back();

        }catch (\Exception $e){

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}

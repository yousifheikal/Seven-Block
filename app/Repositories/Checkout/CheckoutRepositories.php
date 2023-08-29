<?php

namespace App\Repositories\Checkout;

use App\Models\Checkout;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutRepositories implements CheckoutRepositoriesInterface
{
    public function store($request){

        try{

            $checkout = new Checkout();

            $checkout->project_name = $request->project_name;
            $checkout->project_price = $request->project_price;
            $checkout->project_image = $request->project_image;
            $checkout->fname = $request->fname;
            $checkout->lname = $request->lname;
            $checkout->email = $request->email;
            $checkout->phone = $request->phone;
            $checkout->address = $request->add;
            $checkout->country = $request->country;
            $checkout->save();

            Cart::instance('cart')->destroy();

            toastr()->success('Process of checkout Successfully');
            return redirect()->route('thank_you');

        }catch (\Exception $e){
            return view('show_error.show_error');
        }

    }

}

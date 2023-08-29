<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutDashboard extends Controller
{
    //

    public function index(){

        return view('pages_dashboard.orders.index')->with('orders', Checkout::all());
    }

    public function delete(Request $request){

        Checkout::find($request->id)->delete();

        toastr()->error('order deleted');
        return redirect()->back();
    }
}

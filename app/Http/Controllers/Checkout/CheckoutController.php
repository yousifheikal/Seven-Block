<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\Checkout;
use App\Repositories\Checkout\CheckoutRepositoriesInterface;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    protected $checkout;

    public function __construct(CheckoutRepositoriesInterface $checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CheckoutRequest $request)
    {
        //
        return $this->checkout->store($request);
    }

}

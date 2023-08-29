<?php

namespace App\Http\Controllers\Reviews;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewsController extends Controller
{
    //

    public function store(Request $request)
    {

        try {

            // Validation
            $validated = $request->validate([
                'rating' => 'required',
                'comment' => 'required',
                'product_id' => 'required',
            ]);

            $review = new Review();
            $review->name = Auth::user()->name;
            $review->email = Auth::user()->email;
            $review->rating = $request->rating;
            $review->comment = $request->comment;
            $review->project_slug = $request->product_slug;
            $review->product_id = $request->product_id;
            $review->save();

            toastr()->success('Thx for reviewing');
            return redirect()->back();

        }catch (\Exception $e){
            toastr()->error('Something Error please try again.');

            return view('show_error.show_error');
        }
    }
}

<?php

namespace App\Http\Controllers\CommentDesign;

use App\Http\Controllers\Controller;
use App\Models\commentDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentDesignController extends Controller
{
    //

    public function index(){

        return view('pages_dashboard.CommentCustomer.index')->with('comments', commentDesign::all());
    }

    public function delete(Request $request){
        try {

            commentDesign::find($request->id)->delete();

            toastr()->error('Comment deleted');
            return redirect()->back();

        }catch (\Exception $e){

            return view('show_error.show_error');
        }
    }


    public function store(Request $request){

        $Validate = $request->validate([
            'comment' => 'required|max:255',
        ]);

        try{

            $comment = new commentDesign();

            $comment->user = Auth::user()->name;
            $comment->comment = $request->comment;
            $comment->project_id = $request->project_id;
            $comment->save();

            toastr()->success('Comment created Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }
}

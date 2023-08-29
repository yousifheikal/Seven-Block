<?php

namespace App\Http\Controllers\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // Function use to show all contactUs in Dashboard
    public function index(){

        return view('pages_dashboard.contactUs.index')->with('Contacts', ContactUs::all());
    }

    // Function use to delete row of contact

    public function delete(Request $request){

        ContactUs::find($request->id)->delete();

        toastr()->error('Contact deleted');
        return redirect()->back();
    }

    // Function use to store data in table of contactUs
    public function store(Request $request){

        $Validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        try{

            $Contact = new ContactUs();

            $Contact->name = $request->name;
            $Contact->email = $request->email;
            $Contact->phone = $request->phone;
            $Contact->comment = $request->comment;

            $Contact->save();

            toastr()->success('Thx for contact');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }
}

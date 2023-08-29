<?php

namespace App\Http\Livewire;

use App\Models\AllCustomerProject;
use App\Models\commentDesign;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DesginComponent extends Component
{
    public function render()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;

        $project = AllCustomerProject::where('section', 'design')->Where('user_id' , $user_id)->first();

        $comments = commentDesign::Where('user' , $user_name)->get();

        $All_comment = commentDesign::all();

        return view('livewire.desgin-component', compact('project', 'comments', 'All_comment'))->layout('layout.base');
    }
}

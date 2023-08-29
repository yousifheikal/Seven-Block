<?php

namespace App\Http\Livewire;

use App\Models\AllCustomerProject;
use App\Models\commentDesign;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FinishingSectionComponent extends Component
{
    public function render()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;

        $project = AllCustomerProject::where('section', 'finishing')->Where('user_id' , $user_id)->first();

        $comments = commentDesign::Where('user' , $user_name)->get();

        $All_comment = commentDesign::all();

        return view('livewire.finishing-section-component', compact('project', 'comments', 'All_comment'))->layout('layout.base');
    }
}

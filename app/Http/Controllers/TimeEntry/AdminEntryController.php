<?php

namespace App\Http\Controllers\TimeEntry;

use App\Http\Controllers\Controller;
use App\Models\TimeEntry\TimeEntry;
use App\Models\User;
use Illuminate\Http\Request;

class AdminEntryController extends Controller
{
    //
    public function index(){

        $users = User::where('utype', 'EMP')->get();
        return view('pages_dashboard.TimeSheet.index', compact('users'));
    }

    public function create(Request $request){

        try {

            $task = new TimeEntry();

            $task->project = $request->project;
            $task->task = $request->task;
            $task->cost_type = $request->cost;
            $task->code_of_account = $request->account;
            $task->Activity_location = $request->active;
            $task->type = $request->type;

            $task->save();

            toastr()->info('Task created Successfully');
            return redirect()->route('emp.tasks');

        }catch (\Exception $e){

            return $e;
        }
    }
}

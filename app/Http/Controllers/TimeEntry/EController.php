<?php

namespace App\Http\Controllers\TimeEntry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EController extends Controller
{
    //
    public function index(){

        $Tasks = TimeEntry::all();

        return view('pages_dashboard.TimeSheet.Emp.index', compact('Tasks'));
    }

    public function edit($id){

        $time = TimeEntry::where('id', $id)->first();

        return view('pages_dashboard.TimeSheet.Emp.edit', compact('time'));
    }

    public function store(Request $request){

        try {

            $task = new TimeEntry();
            $task->project = $request->project;
            $task->task = $request->task;
            $task->cost_type = $request->cost_type;
            $task->code_of_account = $request->code_of_account;
            $task->Activity_location = $request->Activity_location;
            $task->type = $request->type;
            $task->days = $request->days;
            $task->total = $request->total;
            $task->shift = $request->shift;

            $task->save();

            
            // $emp = TimeEntry::find($request->id);

            // $emp->update([
            //     'project' => $request->project,
            //     'task' => $request->task,
            //     'cost_type' => $request->cost_type,
            //     'code_of_account' => $request->code_of_account,
            //     'Activity_location' => $request->Activity_location,
            //     'type' => $request->type,
            //     'days' => $request->days,
            //     'total' => $request->total,
            //     'shift' => $request->shift
            // ]);

            toastr()->info('Task created Successfully');
            return redirect()->route('emp.tasks');

        }catch (\Exception $e){
            return $e;
        }
    }
}

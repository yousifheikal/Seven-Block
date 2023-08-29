<?php

namespace App\Repositories\ProjectCustomer;

use App\Models\AllCustomerProject;
use App\Models\User;

class ProjectCustomerRepositories implements ProjectCustomerRepositoriesInterface
{

    public function index()
    {
        // TODO: Implement index() method.
        $projects = AllCustomerProject::all();
        $users = User::where('code', '>' , 0)->where('utype', '!=', 'ADM')->where('utype', '!=', 'EMP')->get();
        return view('pages_dashboard.ProjectCustomer.index', compact('projects', 'users'));

    }

    public function store($request)
    {
        // TODO: Implement store() method.
        $Validate = $request->validate([
            'section' => 'required',
            'user_id' => 'required',
        ]);

        try{

            $project = new AllCustomerProject();

            $project->section = $request->section;
            $project->user_id = $request->user_id;
            $project->bedroom = $request->bedroom;
            $project->lounge = $request->lounge;
            $project->saloon = $request->saloon;
            $project->bathroom = $request->bathroom;
            $project->external = $request->external;

            $project->save();

            toastr()->info('Project created Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return $e;
        }
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
        $Validate = $request->validate([
            'section' => 'required',
            'user_id' => 'required',
        ]);

        try{

            $product = AllCustomerProject::findOrfail($id);

            $product->update([
                'section' => $request->section,
                'user_id' => $request->user_id,
                'bedroom' => $request->bedroom,
                'lounge' => $request->lounge,
                'saloon' => $request->saloon,
                'bathroom' => $request->bathroom,
                'external' => $request->external,
            ]);

            toastr()->info('Project updated Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        try {

            AllCustomerProject::find($id)->delete();

            toastr()->error('Project deleted');
            return redirect()->back();

        }catch (\Exception $e){

            return view('show_error.show_error');
        }
    }
}

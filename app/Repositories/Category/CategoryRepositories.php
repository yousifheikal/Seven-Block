<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryRepositories implements CategoryRepositoriesInterface
{


    public function index()
    {
        // TODO: Implement index() method.
        $Categories = Category::all();
        return view('pages_dashboard.categories.index', compact('Categories'));
    }

    public function store($request)
    {
        // TODO: Implement store() method.

        $Validate = $request->validate([
            'name' => 'required|max:255',
        ]);

        try{

            $category = new Category();

            $category->name = $request->name;
            $category->slug = Str::slug($request->name);
            $category->save();

            toastr()->info('Category created Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.

        $Validate = $request->validate([
            'name' => 'required|max:255',
        ]);

        try {
            $user = Category::findOrfail($id);
            $user->update([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
            ]);

            toastr()->info('Category updated');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        try {

            Category::find($id)->delete();

            toastr()->error('Category deleted');
            return redirect()->back();

        }catch (\Exception $e){

            return view('show_error.show_error');
        }
    }
}

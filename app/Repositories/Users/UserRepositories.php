<?php

namespace App\Repositories\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepositories implements UserRepositoriesInterface
{
    public function index()
    {
        $users = User::all();
        return view('pages_dashboard.users.index', ['users' => $users]);
    }

    public function store($request)
    {
        $Validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:255',
            'utype' => 'required',
        ]);

        try{

            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->utype = $request->utype;
            $user->code = $request->code;
            $user->save();

            toastr()->info('User created Successfully');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }


    public function update($request, $id)
    {
        $Validate = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|max:255',
            'utype' => 'required',
        ]);

        try {

            $user = User::findOrfail($id);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'utype' => $request->utype,
                'code' => $request->code
            ]);
            toastr()->info('User updated');
            return redirect()->back();
        }catch (\Exception $e){
            return view('show_error.show_error');
        }

    }

    public function destroy($id)
    {
        try {

            User::find($id)->delete();

            toastr()->error('User deleted');
            return redirect()->back();

        }catch (\Exception $e){
            return view('show_error.show_error');
        }
    }
}

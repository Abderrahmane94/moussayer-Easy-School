<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function UserView()
    {
        $data['allData'] = User::all();
//        $data['allData'] = User::where('name', 'Admin')->get();
        return view('doreViews.admin.user.list_user', $data);

    }


    public function UserAdd()
    {
        return view('doreViews.admin.user.add_user');
    }


    public function UserStore(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|unique:users',
            'name' => 'required',
        ]);

        $data = new User();

        $data = new User();
        $code = rand(0000,9999);
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($code);
        $data->code = $code;
        $data->save();

        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'

        );


        return redirect()->route('users.view')->with($notification);

    }


    public function UserEdit($id)
    {
        $editData = User::find($id);
        return view('doreViews.admin.user.edit_user', compact('editData'));

    }


    public function UserUpdate(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->role = $request->role;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('/img/profiles' . $data->profile_photo_path));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/img/profiles'), $filename);
            $data['profile_photo_path'] = '/img/profiles/'.$filename;
        }

        $data->save();

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('users.view')->with($notification);

    }


    public function UserDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('users.view')->with($notification);

    }
}

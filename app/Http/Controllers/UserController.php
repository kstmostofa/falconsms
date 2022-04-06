<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('type', 'user')->get();
        // dd($users);
        return view('user.index', compact('users'));
    }

    public function store(Request $request)
    {
        if ($request->id) {
            $users = User::find($request->id);
            $message = 'User Updated Successfully';
        } else {
            $users = new User();
            $users->status = true;
            $message = 'User Added Successfully';
        }
        $users->name = $request->name;
        $users->email = $request->email;
        $users->passwordx = $request->password;
        $users->password = Hash::make($request->password);
        $users->type = 'user';
        $users->save();
        return redirect()->route('users')->with('success', $message);
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->route('users')->with('success', 'User Deleted Successfully');
    }

    public function userStatus($id)
    {
        $users = User::find($id);
        if ($users->status == true) {
            $users->status = false;
        } else {
            $users->status = true;
        }
        $users->save();
        return redirect()->route('users')->with('success', 'User Updated Successfully');
    }

    public function myProfile()
    {
        return view('user.profile');
    }

    public function changePassword(Request $request, $id)
    {
        $user= Auth::user($id);
        $user->password=Hash::make($request->id);
        $user->passwordx=$request->password;
        $user->save();
        // return redirect()->route('myProfile')->with('success', 'Password Updated Successfully');
        Auth::logout();
        return redirect()->route('login');

    }
}

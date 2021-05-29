<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SuperAdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('superadmin.user.dashboard')->with('users', $users);
    }

    public function editUserRole($id)
    {
        $user_roles = User::find($id);
        return view('superadmin.user.edit')->with('user_roles', $user_roles);
    }

    public function updateUserRole(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|max:50',
            'roles' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('superadmin/role-edit/' . $id)->withErrors($validator)->withInput();
        } else {
            $user = User::find($id);
            $user->name = $request->input('name');
            $user->role_as = $request->input('roles');
            $user->update();

            return redirect()->back()->with('success', 'User Role has been updated successfully.');
        }
    }

    function deleteUserRole($id)
    {
        $user = User::where('id', $id)->first();
        User::where('id', $id)->delete();
        return redirect()->back()->with('success', 'User has been deleted successfully.');
    }

    public function changeUserStatus(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        if ($user->status == 0) {
            return response()->json(['message' => 'User account has been actived successfully.']);
        } else if ($user->status == 1) {
            return response()->json(['message' => 'User account has been deactived successfully.']);
        } else {
            return response()->json(['message' => 'Something went wrong !!']);
        }
    }
}

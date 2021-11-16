<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAdminPasswordRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        $role = Auth::user()->role_as;
        if ($role == 'admin') {
            return view('admin.profile.profile');
        }

        if ($role == 'superadmin') {
            return view('superadmin.profile.profile');
        }
    }

    public function changePassword()
    {
        $role = Auth::user()->role_as;

        if ($role == 'admin') {
            return view('admin.profile.password');
        }

        if ($role == 'superadmin') {
            return view('superadmin.profile.password');
        }
    }

    public function updateProfile(UpdateProfileRequest $request)
    {
        $user = User::findOrFail(Auth::id());

        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        $user->update($request->validated());

        if (session('locale') == 'en') {
            return redirect()->back()->with('success', 'Profile Successfully Updated.');
        }

        if (session('locale') == 'hi') {
            return redirect()->back()->with('success', 'प्रोफ़ाइल सफलतापूर्वक अपडेट की गई।');
        }
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->update();
                Auth::logout();

                if (session('locale') == 'en') {
                    return redirect()->route('login')->with('success', 'Password Successfully Changed.');
                }

                if (session('locale') == 'hi') {
                    return redirect()->route('login')->with('Success', 'पासवर्ड सफलतापूर्वक बदल दिया है।');
                }

                // Auth::logout();
            } else {
                if (session('locale') == 'en') {
                    return redirect()->back()->with('error', 'New password cannot be the same as old password.');
                }

                if (session('locale') == 'hi') {
                    return redirect()->back()->with('error', 'नया पासवर्ड पुराने पासवर्ड जैसा नहीं हो सकता।');
                }
            }
        } else {
            if (session('locale') == 'en') {
                return redirect()->back()->with('error', 'Current password do not match.');
            }

            if (session('locale') == 'hi') {
                return redirect()->back()->with('error', 'वर्तमान पासवर्ड मेल नहीं खाता।');
            }
        }
    }

    public function adminChangePassword($id)
    {
        $user = User::findOrFail($id);

        if ($user->role_as == 'admin') {
            return view('superadmin.user.password', compact('user'));
        }

        return redirect()->back()->with('error', 'You are not authorized to access another user profile.');
    }

    public function adminUpdatePassword(UpdateAdminPasswordRequest $request, $id)
    {
        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->update();
        // Auth::logout();
        return redirect()->back()->with('success', 'Password Successfully Changed.');
    }
}

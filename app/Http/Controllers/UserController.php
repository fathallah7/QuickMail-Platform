<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function userAccount()
    {
        $user = Auth::user();
        return view('useraccount', ['user' => $user]);
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        // Validate inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'profile' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            // 'password' => 'nullable|confirmed|min:6',
        ]);

        // Handle profile image upload
        if ($request->hasFile('profile')) {
            $filename = time() . '.' . $request->profile->extension();
            $request->profile->storeAs('storage/profile', $filename);
            $user->profile_image = $filename;
        }

        // Update other info
        $user->name = $request->name;
        $user->email = $request->email;

        // Change password if filled
        // if ($request->filled('password')) {
        //     $user->password = bcrypt($request->password);
        // }

        $user->save();

        return back()->with('success', 'Profile updated successfully.');
    }
}

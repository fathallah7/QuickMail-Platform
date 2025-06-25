<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{

    public function index() {
        $users = User::all();
        return view('admin.dashboard' , ['data' => $users]);
    }

    public function show($userId) {
        $OneUser = User::find($userId);
        if(is_null($OneUser)) {
            return to_route('admin.dashboard');
        }
        return view('admin.userinfo' , ['data' => $OneUser]);
    }

    public function destroyUser($userId)
    {
        $user = User::find($userId);
        $user->delete();
        return to_route('admin.dashboard')->with('success', 'User deleted successfully.');
    }



}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AdminController extends Controller
{

    public function index() {
        $data = User::all();
        return view('admin.dashboard' , ['data' => $data]);
    }

    public function destroyUser($userId) {
        $user = User::find($userId);
        $user->delete();
        return to_route('admin.dashboard')->with('danger','An Acoount Has Been Deleted');
    }


}

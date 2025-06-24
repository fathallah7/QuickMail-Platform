<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function showSignupForm()
    {
        return view("auth.signup");
    }

    public function signup(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return redirect()->route('login');
    }

    // --------------------------------------------------------------

    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route("home");
        }
        return back()->withErrors(
            ["email" => "The User Not Found"]
        )->withInput();
    }

    // --------------------------------------------------------------

    public function logout(Request $request)
    {
        Auth::logout(); // تسجيل الخروج

        $request->session()->invalidate();       // حذف بيانات الجلسة القديمة
        $request->session()->regenerateToken();  // إنشاء CSRF Token جديدة

        return redirect()->route('home'); 
    }
}

// --------------------------------------------------------------


        // $request->validate([
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'required|string|min:6',
        // ], [
        //     'email.required' => 'Please enter your email address.',
        //     'email.email' => 'The email format is invalid.',
        //     'email.unique' => 'This email address is already registered.',
        //     'password.required' => 'Password is required.',
        //     'password.min' => 'Password must be at least 6 characters.',
        // ]);

        // $data = $request->only(['name', 'email', 'password']);
        // User::create($data);
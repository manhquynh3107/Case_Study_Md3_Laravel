<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showDashboard()
    {
        return view('admin.index')->with('success','Welcome Admin');
    }

    public function login(Request $request)
    {
        $user = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::attempt($user)) {
            return redirect()->route('login')->with('error', 'Email or Password are wrong Please try again.');
        } else {
            return redirect()->route('listUser');
        }
    }

    public function homeUser()
    {
        return view('frontend.pages.home')->with('success','Welcome User Comte To Website');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success','You Was Logout Success');
    }
}

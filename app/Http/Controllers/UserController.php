<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        return view('signin');
    }


    public function login()
    {
        return view('loginPage');
    }

    public function loginPost(Request $request)
    {
        $data = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->intended(route('landingPage'));
        }

        return redirect(route('login'))->with("error", "Login details are not valid");
    }

    public function registerPost(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if (!$user) {
            return redirect(route('register'))->with("error", "register failed");
        }

        return redirect(route('login'))->with("success", "registration success, login to access the web");
    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect(route('login'));

    }
}

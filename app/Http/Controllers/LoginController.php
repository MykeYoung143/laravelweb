<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function forgot()
    {
        return view('login.forgot', [
            'title' => 'Forgot Password',
            'active' => 'forgot'
        ]);
    }

    // public function password(Request $request)
    // {
    //     $user = User::whereEmail($request->$email)->first();

    //     if(count($user) == 0){
    //         return redirect()->back()->with(['error' => 'Email does not exists ']);
    //     }
    // }
}

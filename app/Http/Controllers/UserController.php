<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerpage() {
        return view('user/register');
    }
    public function register(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Log the user in
        auth()->login($user);

        return redirect('login');
    }


    public function loginpage() {
        return view('user/login');
    }
    public function login(Request $request) {
        $incomingFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();
            return redirect('/index');
        }
        else {
            // login failed → flash message
            return back()->with('login_error', 'Invalid email or password!');
            return redirect('/login');
        }
    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('user.loginpage');
    }


    public function indexpage() {
        $loggedUser = Auth::user();
        return view('index', compact('loggedUser'));
    }
}

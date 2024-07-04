<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function index()
    {
        return view('loginpage');
    }

    public function login(Request $request): RedirectResponse
    {
        $validator = validator($request->all(), [
            'username' => 'required|exists:users',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->withErrors([
                'username' => 'Username salah',
            ]);
        }

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Password salah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // You can customize this method if needed
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // You can customize this method if needed
    protected function authenticated(Request $request, $user)
    {
        // Additional logic after a user logs in
    }
}
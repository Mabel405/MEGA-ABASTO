<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect()->route('login');
    }
}

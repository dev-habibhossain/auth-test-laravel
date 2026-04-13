<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('custom_auth.login');
    }
}

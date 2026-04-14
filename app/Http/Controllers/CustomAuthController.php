<?php

namespace App\Http\Controllers;

use App\Models\CustomModel;
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('custom_auth.login');
    }
    public function loginSubmit(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        

        $user = CustomModel::where('email', $email)->where('password', $password)->where('is_active', true)->first();

        session([
            'custom_user_id' => $user ? $user->id : null,
            'custom_user_email' => $user ? $user->email : null,
        ]);

        if ($user) {
            return redirect()->route('dashboard')->with('success', 'Login successful!');
        } else {
            return back()->withErrors(['email' => 'Invalid credentials or account not active.'])->with('failed', 'Login failed!');
        }

    }
}

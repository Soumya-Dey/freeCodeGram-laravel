<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function store(Request $request)
    {
        // validate fields
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        // signin user
        if(!auth()->attempt($request->only('email', 'password')))
            return back()->with("status", "Incorrect login credentials!");

        // redirect to dashboard
        return redirect()->route("dashboard");
    }
}

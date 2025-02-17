<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('user_auth.login');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status','invalid login details');
        }

        return redirect()->route('dashboard');
    }
}

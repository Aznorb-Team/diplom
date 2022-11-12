<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('register');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);
        return redirect('user/main');
    }
    public function loginForm(){
        return view('login');
    }
    public function login(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect('user/main');
        }
        return redirect()->back()->with('error', $request->password);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}

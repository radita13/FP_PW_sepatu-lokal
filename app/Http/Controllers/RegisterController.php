<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('login-signup.signup');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:255|min:3',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6|max:10',
            'phone_number' => 'required|max:15'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfully!! Please login');
    }
}

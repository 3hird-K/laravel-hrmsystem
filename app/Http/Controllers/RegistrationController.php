<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HrUser;
use Illuminate\Support\Facades\Hash;



class RegistrationController extends Controller
{
    public function register(){
        return view("auth.register");
    }

    public function store(Request $request){
        
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:table_hr_users',
            'username' => 'required|string|max:255|unique:table_hr_users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        
        HrUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('register')->with('success', 'Registration successful, User is Added.');

    }

    
}

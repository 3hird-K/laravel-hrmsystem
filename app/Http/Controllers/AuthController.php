<?php

namespace App\Http\Controllers;

use App\Models\HrUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function showLoginForm(Request $request){
        return view("auth.login");
    }

   public function showAdminForm(Request $request){
        return view("auth.admin");
   }


   public function admin(Request $request){
        validator(request()->all(), [
            'username' => ['required','string'],
            'password'=> ['required'],
        ])->validate();

        if(auth()->attempt(request()->only(['username','password']))) {
            return redirect('/register');
        }
        return redirect()->route('admin')->with('error', 'Invalid credentials.');

   }

   public function logout(){
        auth()->logout();
        return redirect()->route('admin')->with('success','Logout Successfully');
   }



   public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = HrUser::where('username', $credentials['username'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            // Invalid credentials
            return redirect()->route('login')->with('error', 'Invalid username or password.');
        }

        // Authentication passed
        Auth::login($user);

        return redirect()->intended('/');
    }
 

}

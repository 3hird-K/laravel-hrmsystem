<?php

namespace App\Http\Controllers;

use App\Models\HrUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
   public function showLoginForm(){
        return view("auth.login");
    }

   public function showAdminForm(){
        return view("auth.admin");
   }

   public function admin(Request $request)
{
    validator(request()->all(), [
        'username' => ['required', 'string'],
        'password' => ['required'],
    ])->validate();

    if (auth()->attempt(request()->only(['username', 'password']))) {
        if (auth()->user()->role === 'admin') {
            return redirect('/register');
        } else {
            auth()->logout();
            return redirect()->route('admin')->with('error', 'You do not have permission to access this page.');
        }
    }

    return redirect()->route('admin')->with('error', 'Invalid credentials.');
}

   public function logout(){
        auth()->logout();
        return redirect()->route('admin')->with('success','Logout Successfully');
   }



//    public function login(Request $request)
// {
//     $credentials = $request->validate([
//         'username' => 'required|string',
//         'password' => 'required|string',
//     ]);

//     $user = HrUser::where('username', $credentials['username'])->first();

//     if (!$user || !Hash::check($credentials['password'], $user->password) ) {
//         return redirect()->route('login')->with('error', 'Invalid username or password.');
//         if($user->role === "user"){
//             return redirect()->route("login")->with("error", "")->with('error', 'You do not have permission to access this page.');
//         }
//     }
//     Auth::login($user);
//     return redirect()->intended('/');
    
// // }
// public function login(Request $request)
// {
//     $credentials = $request->validate([
//         'username' => 'required|string',
//         'password' => 'required|string',
//     ]);

//     $user = HrUser::where('username', $credentials['username'])->first();

//     if (!$user || !Hash::check($credentials['password'], $user->password)) {
//         return redirect()->route('login')->with('error', 'Invalid username or password.');
//     }

//     Auth::login($user);

//     if ($user->role === 'admin') {
//         return redirect()->intended('/register');
//     }else{
//         return redirect()->intended('/');
//     }

    
// }

public function login(Request $request)
{
    $credentials = $request->validate([
        'username' => 'required|string',
        'password' => 'required|string',
    ]);

    $user = HrUser::where('username', $credentials['username'])->first();

    if (!$user || !Hash::check($credentials['password'], $user->password)) {
        return redirect()->route('login')->with('error', 'Invalid username or password.');
    }

    // if (Auth::attempt($credentials)) {
    //     if (Auth::user()->role === 'user') {
    //         return redirect()->intended('/');
    //     } else {
    //         return redirect()->route('login');
    //     }
    // }
    
    return redirect()->route('home');
}




 
}

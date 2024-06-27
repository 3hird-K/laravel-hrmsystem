<?php

namespace App\Http\Controllers;

use App\Models\HrUser;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
        // return view("welcome");
    }

    public function showAdminForm()
    {
        return view("auth.admin");
    }


    // public function login(Request $request)
    // {

    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $user = HrUser::where('username', $request->username)->first();


    //     if (auth()->attempt(request()->only(['username', 'password']))) {
    //         if (auth()->user()->role === 'admin') {
    //             return redirect('/register');
    //         } else {
    //             auth()->logout();
    //             return redirect()->route('admin')->with('error', 'You do not have permission to access this page.');
    //         }
    //     }
    // }

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


    public function logout()
    {
        auth()->logout();
        return redirect()->route('admin')->with('success', 'Logout Successfully');
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

    // public function login(Request $request)
    // {
    //     // Validate the incoming request
    //     $credentials = $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     // Retrieve the user by username
    //     $user = HrUser::where('username', $credentials['username'])->first();

    //     // Check if the user exists and if the provided password matches the stored hash
    //     if (!$user || !Hash::check($credentials['password'], $user->password)) {
    //         return redirect()->route('login')->with('error', 'Invalid username or password.');
    //     } else if ($user->role === 'user') {
    //         return redirect('/dashboard');
    //     } else {
    //         // $user->logout();
    //         return redirect('/dashboard');

    //         // return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
    //     }


    // return redirect()->route('login')->with('error', 'Invalid credentials.');

    // Log the user in
    // Auth::login($user);

    // Redirect to the intended page or a default one
    // return redirect()->intended('dashboard');
    // }

    // public function login(Request $request)
    // {
    //     // Validate the incoming request
    //     $credentials = $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);

    //     // Retrieve the user based on the provided username
    //     $loginUser = HrUser::where('username', $credentials['username'])->first();

    //     // Check if the user exists and the password is correct
    //     if (!$loginUser || !Hash::check($credentials['password'], $loginUser->password)) {
    //         return redirect()->route('login')->with('error', 'Invalid username or password.');
    //     }

    //     // Log the user in
    //     Auth::login($loginUser);

    //     // Check if the user is authenticated
    //     if (Auth::check()) {
    //         // Redirect based on user role
    //         if ($loginUser->role === 'user') {
    //             return redirect('/dashboard');
    //         } else {
    //             Auth::logout();
    //             return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
    //         }
    //     }

    //     // Return an error if authentication failed
    //     return redirect()->route('login')->with('error', 'Failed to authenticate.');
    // }


    public function login(Request $request)
    {
        // Validate the incoming request
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Retrieve the user based on the provided username
        $loginUser = HrUser::where('username', $credentials['username'])->first();

        // Check if the user exists and the password is correct
        if (!$loginUser || !Hash::check($credentials['password'], $loginUser->password)) {
            return redirect()->route('login')->with('error', 'Invalid username or password.');
        }

        // Log the user in
        Auth::login($loginUser);

        // Check if the user is authenticated
        if (Auth::check()) {
            // Redirect based on user role
            if ($loginUser->role === 'user') {
                return redirect('/dashboard');
            } else {
                Auth::logout();
                return redirect()->route('login')->with('error', 'You do not have permission to access this page.');
            }
        }

        // Return an error if authentication failed
        return redirect()->route('login')->with('error', 'Failed to authenticate.');
    }


    // public function login(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'username' => 'required|string',
    //         'password' => 'required|string',
    //     ]);
    //     // validator(request()->all(), [
    //     //     'username' => ['required', 'string'],
    //     //     'password' => ['required'],
    //     // ])->validate();

    //     $user = HrUser::all();
    //     $loginuser = HrUser::where('username', $credentials['username'])->first();

    //     if (!$loginuser || !Hash::check($credentials['password'], $loginuser->password)) {
    //         return redirect()->route('login')->with('error', 'Invalid username or password.');
    //     }


    //     if (Auth::login($loginuser)) {

    //         if ($user->role === 'user') {
    //             return redirect('/dashboard');
    //         } else {
    //             auth()->logout();
    //             return redirect()->route('admin')->with('error', 'You do not have permission to access this page.');
    //         }
    //     }

    //     return redirect()->route('dashboard')->with('error', 'Invalid credentials.');
    //     // return redirect()->route('login')->with('error', 'Invalid credentials.');
    // }
}

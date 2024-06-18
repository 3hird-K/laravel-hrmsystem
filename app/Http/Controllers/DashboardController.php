<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\HrUser;
use Illuminate\Support\Facades\Hash;
use App\Models\Coach;
use App\Models\Employee;
use App\Models\User;
use App\Models\Department;

class DashboardController extends Controller
{





    public function showDashboardForm()
    {
        $hr_user = HrUser::all();
        $admins = User::all();
        $supervisors = Coach::all();
        $employees = Employee::all();
        return view('dashboard.dashboard', compact('hr_user', 'admins', 'supervisors', 'employees'));
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Logout Successfully');
    }

    public function EmployeesData()
    {

        return view('dashboard.user');
    }

    public function ShowEmployeesData()
    {
        // $employee = Employee::all();
        // $supervisor = Coach::all();
        // return view('dashboard.list_employee', compact('employee','supervisor'));
        // Coach::paginate(5);
        $employees = Employee::all();
        $employees = Employee::paginate(5);
        $supervisors = Coach::all();
        return view('dashboard.list_employee', compact('employees', 'supervisors'));
    }






    public function ShowDepartmentForm()
    {
        $departments = Department::all();
        return view('dashboard.department', compact('departments'));
    }
    public function ShowLeaveForm()
    {
        return view('dashboard.leave');
    }




    public function ShowPayrollForm()
    {
        return view('dashboard.payroll');
    }
    public function ShowAccountForm()
    {
        return view('dashboard.account');
    }

    // public function showLoginForm(){
    //     return view('auth.login');
    // }

    // public function login(Request $request){
    //     $credentials = $request->only('username', 'password');

    //     if(Auth::attempt($credentials)){
    //         return redirect()->intended('/dashboard');
    //     }

    //     return redirect()->back()->withErrors(['username' => 'Invalid Credentials']);
    // }


}

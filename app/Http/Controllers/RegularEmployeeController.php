<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegularEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('dashboard.user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'fname' => 'required',
    //         'lname' => 'required',
    //         'position' => 'required',
    //         'contact' => 'required|regex:/^09[0-9]{9}$/',
    //         'address' => 'required',
    //         'status' => 'required',
    //         'Supervisor' => 'required',
    //         'date_hired' => 'nullable',
    //         'employee-profile' => 'required|image|mimes:jpg,png',
    //         'description' => 'nullable',
    //     ]);

    //     try {
    //         // Handle form submission
    //         $newEmployee = new Employee();
    //         $newEmployee->fname = $request->input('fname');
    //         $newEmployee->lname = $request->input('lname');
    //         $newEmployee->position = $request->input('position');
    //         $newEmployee->contact = $request->input('contact');
    //         $newEmployee->address = $request->input('address');
    //         $newEmployee->status = $request->input('status');
    //         $newEmployee->Supervisor = $request->input('Supervisor') ?: 'Donna Jane D. Rojo'; // Default value if Supervisor is not provided
    //         $newEmployee->date_hired = $request->input('date_hired');
    //         $newEmployee->description = $request->input('description');

    //         // Handle file upload
    //         if ($request->hasFile('employee-profile')) {
    //             $image = $request->file('employee-profile');
    //             $path = $image->store('public/images');
    //             $url = Storage::url($path);
    //             $newEmployee->image = $url;
    //         }

    //         $newEmployee->save();

    //         return redirect('/employee')->with('approved', 'Employee Added Successfully');
    //     } catch (\Exception $e) {
    //         return redirect('/employee')->with('failed', "Failed to register Employee or has duplicates");
    //     }
    // }

//     public function store(Request $request)
//     {

//         $request->validate([
//             'fname' => 'required',
//             'lname' => 'required',
//             'position' => 'required',
//             'contact' => 'required|regex:/^09[0-9]{9}$/',
//             'address' => 'required',
//             'status' => 'required',
//             'Supervisor' => 'nullable', // Changed to nullable to allow default value handling
//             'date_hired' => 'nullable',
//             'employee-profile' => 'required|image|mimes:jpg,png',
//             'description' => 'nullable',
//         ]);

//         try {
//             // Handle form submission
//             $newEmployee = new Employee();
//             $newEmployee->fname = $request->input('fname');
//             $newEmployee->lname = $request->input('lname');
//             $newEmployee->position = $request->input('position');
//             $newEmployee->contact = $request->input('contact');
//             $newEmployee->address = $request->input('address');
//             $newEmployee->status = $request->input('status');
//             $newEmployee->Supervisor = $request->input('Supervisor') ?: 'Donna Jane D. Rojo'; // Default value if Supervisor is not provided
//             $newEmployee->date_hired = $request->input('date_hired');
//             $newEmployee->description = $request->input('description');

//             // Handle file upload
//             if ($request->hasFile('employee-profile')) {
//                 $image = $request->file('employee-profile');
//                 $path = $image->store('public/images');
//                 $url = Storage::url($path);
//                 $newEmployee->image = $url;
//             }

//             $newEmployee->save();

//             return redirect('/employee')->with('approved', 'Employee Added Successfully');
//         } catch (\Exception $e) {
//             // Log the error for debugging purposes
//             Log::error('Failed to register employee: ' . $e->getMessage());

//             return redirect('/employee')->with('failed', "Failed to register Employee or has duplicates");
//         }
//     }
// }
public function store(Request $request)
{
    $request->validate([
        'fname' => 'required|string',
        'lname' => 'required|string',
        'position' => 'required|string',
        'contact' => 'required|string',
        'address' => 'required|string',
        'status' => 'required|string',
        'supervisor_id' => 'required|exists:coaches,id', // Assuming 'coaches' table
        'date_hired' => 'nullable|date',
        'employee-profile' => 'required|image|mimes:jpg,png',
        'description' => 'nullable|string',
    ]);

    try {
        // Handle form submission
        $newEmployee = new Employee();
        $newEmployee->fname = $request->input('fname');
        $newEmployee->lname = $request->input('lname');
        $newEmployee->position = $request->input('position');
        $newEmployee->contact = $request->input('contact');
        $newEmployee->address = $request->input('address');
        $newEmployee->status = $request->input('status');
        $newEmployee->supervisor_id = $request->input('supervisor_id');
        $newEmployee->date_hired = $request->input('date_hired');
        $newEmployee->description = $request->input('description');

        // Handle file upload
        if ($request->hasFile('employee-profile')) {
            $image = $request->file('employee-profile');
            $path = $image->store('public/images');
            $url = Storage::url($path);
            $newEmployee->image = $url;
        }

        $newEmployee->save();

        return redirect('/employee')->with('approved', 'Employee Added Successfully');
    } catch (\Exception $e) {
        // Log the error for debugging purposes
        Log::error('Failed to register employee: ' . $e->getMessage());

        return redirect('/employee')->with('failed', 'Failed to register Employee or has duplicates');
    }
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $employee = Employee::find($id);

            if (!$employee) {
                return redirect('/')->with('fail', 'User not found');
            }

            // Retrieve and check the path before deletion
            $path = $employee->profile;

            // Delete the employee record
            $employee->delete();

            // Delete the associated file if path is not null

            if ($path !== null) {
                Storage::delete($path);
            }

            return redirect('/list_employee')->with('success', 'Employee Deleted Successfully');
        } catch (\Exception $e) {
            return redirect('/list_employee')->with('fail', 'Some error occurred while deleting this user');
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Coach;
use App\Models\Department;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        $supervisors = Coach::all();
        // dd($supervisors);
        return view('dashboard.user', compact('departments', 'supervisors'));
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
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'Supervisor' => 'nullable',
            'contact' => 'required|regex:/^09[0-9]{9}$/',
            'address' => 'required',
            'supervisor-profile' => 'required|image|mimes:jpg,png',
        ]);

        try {
            // Handle form submission
            $newCoach = new Coach();
            $newCoach->firstname = $request->input('firstname');
            $newCoach->lastname = $request->input('lastname');
            $newCoach->position = $request->input('position');
            $newCoach->Supervisor = $request->input('Supervisor') ?: 'Donna Jane D. Rojo'; // Default value if Supervisor is not provided
            $newCoach->contact = $request->input('contact');
            $newCoach->address = $request->input('address');

            // Handle file upload
            if ($request->hasFile('supervisor-profile')) {
                $image = $request->file('supervisor-profile');
                $path = $image->store('public/images');
                $url = Storage::url($path);
                $newCoach->image = $url;
            }

            $newCoach->save();

            return redirect('/employee')->with('success', 'Employee Added Successfully');
        } catch (\Exception $e) {
            return redirect('/employee')->with('fail', 'User Failed to Register or Has Duplicates.');
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
    public function edit($id)
    {
        // $supervisor = Coach::find($id);
        return view('emp_data');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'position' => 'required',
            'Supervisor' => 'nullable',
            'contact' => 'required|regex:/^09[0-9]{9}$/',
            'address' => 'required',
            'supervisor-profile' => 'nullable|image|mimes:jpg,png', // allow null or image file
        ]);

        try {
            $supervisor = Coach::find($id);

            if (!$supervisor) {
                return redirect('/')->with('fail', 'Supervisor not found');
            }

            // Update fields based on form input
            $supervisor->firstname = $request->input('firstname');
            $supervisor->lastname = $request->input('lastname');
            $supervisor->position = $request->input('position');
            $supervisor->Supervisor = $request->input('Supervisor') ?: 'Donna Jane D. Rojo'; // Default value if Supervisor is not provided
            $supervisor->contact = $request->input('contact');
            $supervisor->address = $request->input('address');

            // Handle file upload if a new image is provided
            if ($request->hasFile('supervisor-profile')) {
                // Delete old image
                Storage::delete($supervisor->image);

                // Store new image
                $image = $request->file('supervisor-profile');
                $path = $image->store('public/images');
                $url = Storage::url($path);
                $supervisor->image = $url;
            }

            $supervisor->save();

            return redirect('/')->with('success', 'Supervisor updated successfully');
        } catch (\Exception $e) {
            return redirect('/')->with('fail', 'Failed to update supervisor: ' . $e->getMessage());
        }
    }


    public function destroy($id)
    {
        try {
            $supervisor = Coach::find($id);

            if (!$supervisor) {
                return redirect('/')->with('fail', 'User not found');
            }

            // Retrieve and check the path before deletion
            $path = $supervisor->profile;

            // Delete the supervisor record
            $supervisor->delete();

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

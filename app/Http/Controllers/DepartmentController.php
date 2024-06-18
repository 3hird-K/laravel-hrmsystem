<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Exception;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'department_name' => 'required',
            'description' => 'required'
        ]);

        try {
            $newDeparment = new Department();
            $newDeparment->department_name = $request->input('department_name');
            $newDeparment->description = $request->input('description');
            $newDeparment->save();
            return redirect('/department')->with('success', 'Department Added Successfully');
        } catch (Exception $e) {
            return redirect('/department')->with('fail', 'Failed to add Deparment');
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
            $departments = Department::find($id);
            if (!$departments) {
                return redirect('/department')->with('fail', 'Department not found');
            }

            $departments->delete();
            return redirect('/department')->with('success', 'Deparment Deleted Successfully');
        } catch (Exception $e) {
            return redirect('/department')->with('fail', 'Cannot Delete this Department');
        }
    }
}

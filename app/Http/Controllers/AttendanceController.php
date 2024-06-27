<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
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
            'employee_id' => 'required',
            'date' => 'required',
            'status' => 'required',
            'time' => 'required',
        ]);

        try {

            $newAttendance = new Attendance();
            $newAttendance->employee_id = $request->input('employee_id');
            $newAttendance->date = $request->input('date');
            $newAttendance->status = $request->input('status');
            $newAttendance->time = $request->input('time');

            $newAttendance->save();
            return redirect('/dashboard')->with('success', 'Attendance Added Successfully');
          } catch (\Exception $e) {
            return redirect('/dashboard')->with('fail', $e->getMessage());
          };


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
    public function destroy(string $id)
    {
        //
    }
}

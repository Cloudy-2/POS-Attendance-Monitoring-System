<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;
class Display extends Controller
{
    public function Display(){

        return view ('Attendance');
    }
    public function Display1(){

        $attendances = Attendance::all();

        // Pass the data to the Blade view
        return view('attendanceDash', compact('attendances'));
    }
    public function Submit(Request $data)
{
    $validated = $data->validate([
        'employee_id' => 'required|integer',
        'attendancestatus' => 'required',
        'date' => 'required|date',
        'check_in_time' => 'required',
    ]);

    $employeeId = $validated['employee_id'];
    $date = $validated['date'];
    $attendanceStatus = $validated['attendancestatus'];

    // Find an existing record for the same employee and date
    $attendance = Attendance::where('employee_id', $employeeId)
        ->where('date', $date)
        ->first();

    if ($attendance) {
        if ($attendanceStatus === 'timeout') {
            // Update the check-out time
            $attendance->update([
                'check_out_time' => now()->toTimeString(),
            ]);
            return back()->with('success', 'Time Out recorded successfully!');
        } else {
            return back()->with('error', 'Time In already exists for this employee on this date!');
        }
    } else {
        if ($attendanceStatus === 'timein') {
            // Create a new record for Time In
            Attendance::create([
                'employee_id' => $employeeId,
                'date' => $date,
                'check_in_time' => $validated['check_in_time'],
                'check_out_time' => null,
            ]);
            return back()->with('success', 'Time In recorded successfully!');
        } else {
            return back()->with('error', 'No Time In record found to Time Out!');
        }
    }
}
}
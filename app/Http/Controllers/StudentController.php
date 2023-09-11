<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Auth;

class StudentController extends Controller
{
    

public function view()
{
    // Get the currently logged-in user
    $user = Auth::user();

    // Retrieve the student associated with the user
    $student = $user->student;

    return view('student.view-personal-info', compact('student'));
}

public function edit()
{
    // Get the currently logged-in user
    $user = Auth::user();

    // Retrieve the student associated with the user
    $student = $user->student;

    return view('student.edit-personal-info', compact('student'));
}


public function update(Request $request)
{
    // Validate and update student data
    // Redirect to view page
}


public function store(Request $request)
{
    // Validate the input data
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'date_of_birth' => 'required|date',
        'mobile_number' => 'required|string|max:20',
        'email' => 'required|email|unique:users,email', // Ensure email uniqueness
        'present_address' => 'required|string|max:255',
        // Add more validation rules as needed
    ]);

    // Create a new student record
    $student = new Student($validatedData);
    $student->user_id = auth()->id(); // Associate with the currently logged-in user
    $student->save();

if ($student->hasErrors()) {
    // Handle errors, e.g., return with an error message
    return redirect()->back()->withErrors($student->errors())->withInput();
}

}



}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student Information</h1>
        <form method="POST" action="{{ route('student.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" value="{{ $student->first_name }}">
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" value="{{ $student->last_name }}">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $student->date_of_birth }}">
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" name="mobile_number" id="mobile_number" value="{{ $student->mobile_number }}">
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" value="{{ $student->user->email }}">
            </div>
            <div class="form-group">
                <label for="present_address">Present Address:</label>
                <textarea name="present_address" id="present_address">{{ $student->present_address }}</textarea>
            </div>
            <!-- Add more form fields for editing student information -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

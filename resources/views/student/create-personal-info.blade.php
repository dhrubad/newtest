@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
        <h1>Create Personal Information</h1>
        <form method="POST" action="{{ route('student.store') }}">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" name="date_of_birth" id="date_of_birth" required>
            </div>
            <div class="form-group">
                <label for="mobile_number">Mobile Number:</label>
                <input type="text" name="mobile_number" id="mobile_number" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="present_address">Present Address:</label>
                <textarea name="present_address" id="present_address" required></textarea>
            </div>
            <!-- Add more form fields as needed -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection

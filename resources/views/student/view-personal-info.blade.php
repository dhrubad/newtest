@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>View Student Information</h1>
        <p><strong>First Name:</strong> {{ $student->first_name }}</p>
        <p><strong>Last Name:</strong> {{ $student->last_name }}</p>
        <p><strong>Date of Birth:</strong> {{ $student->date_of_birth }}</p>
        <p><strong>Mobile Number:</strong> {{ $student->mobile_number }}</p>
        <p><strong>Email Address:</strong> {{ $student->user->email }}</p>
        <p><strong>Present Address:</strong> {{ $student->present_address }}</p>
        <!-- Add more fields for displaying student information -->
    </div>
@endsection

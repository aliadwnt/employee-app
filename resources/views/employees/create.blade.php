@extends('layout')

@section('content')
    <h1>Add Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position">
        </div>
        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="text" id="date_of_birth" name="date_of_birth" class="datepicker">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection

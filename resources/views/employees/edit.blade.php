@extends('layout')

@section('content')
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $employee->name }}">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $employee->email }}">
        </div>
        <div>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="{{ $employee->position }}">
        </div>
        <div>
            <label for="date_of_birth">Date of Birth:</label>
            <input type="text" id="date_of_birth" name="date_of_birth" value="{{ $employee->date_of_birth }}" class="datepicker">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection

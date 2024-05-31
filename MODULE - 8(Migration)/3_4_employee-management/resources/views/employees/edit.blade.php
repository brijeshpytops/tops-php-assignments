@extends('layouts.app')

@section('content')
<h1>Edit Employee</h1>
<form action="{{ route('employees.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name" value="{{ $employee->first_name }}">
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name" value="{{ $employee->last_name }}">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $employee->email }}">
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="{{ $employee->phone }}">
    <label for="hire_date">Hire Date:</label>
    <input type="date" id="hire_date" name="hire_date" value="{{ $employee->hire_date }}">
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary" value="{{ $employee->salary }}">
    <button type="submit">Update Employee</button>
</form>
@endsection

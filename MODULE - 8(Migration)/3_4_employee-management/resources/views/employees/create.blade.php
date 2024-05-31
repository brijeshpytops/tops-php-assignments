@extends('layouts.app')

@section('content')
<h1>Add Employee</h1>
<form action="{{ route('employees.store') }}" method="POST">
    @csrf
    <label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name">
    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone">
    <label for="hire_date">Hire Date:</label>
    <input type="date" id="hire_date" name="hire_date">
    <label for="salary">Salary:</label>
    <input type="text" id="salary" name="salary">
    <button type="submit">Add Employee</button>
</form>
@endsection

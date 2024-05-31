
@extends('layouts.app')

@section('content')
<h1>Employees</h1>
<a href="{{ route('employees.create') }}">Add Employee</a>
<ul>
    @foreach ($employees as $employee)
        <li>{{ $employee->first_name }} {{ $employee->last_name }} - 
            <a href="{{ route('employees.edit', $employee->id) }}">Edit</a> - 
            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection

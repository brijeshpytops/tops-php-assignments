<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = DB::table('employees')->get();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $inserted = DB::table('employees')->insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'hire_date' => $request->hire_date,
            'salary' => $request->salary,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        if ($inserted) {
            return redirect()->route('employees.index')->with('success', 'Employee added successfully.');
        } else {
            return redirect()->route('employees.create')->with('error', 'Failed to add employee.');
        }
    }


    public function edit($id)
    {
        $employee = DB::table('employees')->where('id', $id)->first();
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request, $id)
    {
        $updated = DB::table('employees')
            ->where('id', $id)
            ->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'hire_date' => $request->hire_date,
                'salary' => $request->salary,
                'updated_at' => now(),
            ]);

        if ($updated) {
            return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
        } else {
            return redirect()->route('employees.edit', $id)->with('error', 'Failed to update employee.');
        }
    }


    public function destroy($id)
    {
        $deleted = DB::table('employees')->where('id', $id)->delete();

        if ($deleted) {
            return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
        } else {
            return redirect()->route('employees.index')->with('error', 'Failed to delete employee.');
        }
    }
}

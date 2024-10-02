<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{
    public function index()
    {
        $managerId = auth('manager')->id();
        $employees = Employee::where('manager_id', $managerId)->with('manager:id')->get();
        return view('manager.dashboard', compact('employees'));
    }



    public function create()
    {
        return view('manager.employees.create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('employee_images', 'public');
            $validatedData['image'] = $imagePath;
        }
        $validatedData['manager_id'] = auth('manager')->id();

        Employee::create($validatedData);
        return redirect()->route('manager.dashboard')->with('success', 'Employee created successfully.');
    }

    public function edit(Employee $employee)
    {
        return view('manager.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,' . $employee->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);


        if ($request->hasFile('image')) {

            if ($employee->image) {
                Storage::disk('public')->delete($employee->image);
            }


            $imagePath = $request->file('image')->store('employee_images', 'public');
            $validatedData['image'] = $imagePath;
        }



        $employee->update($validatedData);

        return redirect()->route('manager.dashboard')->with('success', 'Employee updated successfully.');
    }


    public function destroy(Employee $employee)
    {
        if ($employee->image) {
            Storage::disk('public')->delete($employee->image);
        }

        $employee->delete();

        return redirect()->route('manager.dashboard')->with('success', 'Employee deleted successfully.');
    }
}

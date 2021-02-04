<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();

        return view('departments.index')->with('departments', $departments);
    }


    public function create()
    {
        return view('departments.form')->with('department', null);
    }


    public function store(Request $request)
    {
        $department = new Department;

        $department->name = $request->name;

        $department->location = $request->location;

        $department->employee_id = $request->employee_id;

        $department->save();

        return redirect()->route('departments.index');
    }


    public function show(Department $department)
    {
        //
    }


    public function edit($id)
    {
        $department = Department::find($id);

        $employees = $department->workers()->get();
        
        return view('departments.form')->with('department', $department)->with('employees', $employees);
    }


    public function update(Request $request, $id)
    {
        $department = Department::find($id);

        $department->fill($request->all());

        $department->save();

        return redirect()->route('departments.index');
    }


    public function destroy($id)
    {
        $department = Department::find($id);

        $employees = $department->workers;

        foreach ($employees as $employee) {
            $employee->department_id = null;

            $employee->save();
        }

        $department->delete();

        return redirect()->route('departments.index');
    }
}

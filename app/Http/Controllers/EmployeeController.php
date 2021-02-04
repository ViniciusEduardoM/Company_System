<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index')->with('employees', $employees);
    }


    public function create()
    {
        $employee = null;

        $departments = Department::all();

        return view('employees.form')
                ->with('departments', $departments)
                ->with('employee', $employee);
    }


    public function store(Request $request)
    {
        $employee = new Employee;

        $employee->name = $request->name;
        
        $employee->cpf = $request->cpf;
        
        $employee->address = $request->address;
        
        $employee->phone = $request->phone;
        
        $employee->salary = $request->salary;
        
        $employee->department_id = $request->department_id;

        $employee->save();
 
        $this->isManager($employee, $request->coordinate, $request->department_id);

        return redirect()->route('employees.index');
    }


    public function show($id)
    {
        $employee = Employee::find($id);

        if(is_null($employee->workAt)) {
            $workAt = null;
        } else {
            $workAt = $employee->workAt->name;
        }

        if(is_null($employee->coordinate)) {
            $coordinate = "Não é chefe de nenhum departamento";
        } else {
            $coordinate = $employee->coordinate->name;
        }

        if(is_null($employee->dependants)) {
            $dependants = null;
        } else {
            $dependants = $employee->dependants;
        }

        return view('employees.show')
            ->with('employee', $employee)
            ->with('workAt', $workAt)
            ->with('coordinate', $coordinate)
            ->with('dependants', $dependants);
    }


    public function edit($id)
    {
        $employee = Employee::find($id);

        $departments = Department::all();

        if(is_null($employee->coordinate)) {
            $coordinate = null;
        } else {
            $coordinate = 1;
        }

        return view('employees.form')
                ->with('employee', $employee)
                ->with('departments', $departments)
                ->with('coordinate', $coordinate);
    }


    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);

        $this->isManager($employee, $request->coordinate, $request->department_id);

        $employee->fill($request->all());

        $employee ->save();

        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $employee = Employee::find($id);

        $employee->delete();

        return redirect()->route('employees.index');
    }

    public function isManager($employee, $coordinate, $department_id)
    {
        $department = Department::find($employee->workAt->id);

        $department->employee_id = null;

        $department->save();

        if ($coordinate){
            $department = Department::find($department_id);

            $department->employee_id = $employee->id;
    
            $department->save();
        }
    }
}

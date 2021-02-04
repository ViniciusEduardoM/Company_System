<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependant;
use App\Models\Employee;

class DependantController extends Controller
{
    public function index()
    {
        $dependants = Dependant::all();

        return view('dependants.index')->with('dependants', $dependants);
    }


    public function create()
    {
        $dependant = null;

        $employees = Employee::all();

        return view('dependants.form')
                ->with('employees', $employees)
                ->with('dependant', $dependant);
    }


    public function store(Request $request)
    {
        $dependant = new Dependant;

        $dependant->name = $request->name;
        
        $dependant->address = $request->address;
        
        $dependant->kinship = $request->kinship;
        
        $dependant->employee_id = $request->employee_id;

        $dependant->save();

        return redirect()->route('dependants.index');
    }


    public function show($id)
    {
        $dependant = Dependant::find($id);

        if(is_null($dependant->parents)) {
            $parents = null;
        } else {
            $parents = $dependant->parents->name;
        }

        return view('dependants.show')
            ->with('dependant', $dependant)
            ->with('parents', $parents);
    }


    public function edit($id)
    {
        
        $dependant = Dependant::find($id);

        $employees = Employee::all();

        return view('dependants.form')
                ->with('dependant', $dependant)
                ->with('employees', $employees);
    }


    public function update(Request $request, $id)
    {
        $dependant = Dependant::find($id);

        $dependant->fill($request->all());

        $dependant ->save();

        return redirect()->route('dependants.index');
    }


    public function destroy($id)
    {
        $dependant = Dependant::find($id);

        $dependant->delete();

        return redirect()->route('dependants.index');
    }
}

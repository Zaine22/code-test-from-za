<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Validation\Rule;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('employee.index', [
            'employees' => Employee::latest()->paginate(10),
        ]);
    }

    public function store()
    {
        $formData = request()->validate([
            'name' => ['required'],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'email' => ['required', Rule::unique('employees', 'email')],
            'phone' => ['required', Rule::unique('employees', 'phone')],
        ]);
        Employee::create($formData);

        return redirect('/employee');
    }

    public function create()
    {
        return view('employee.create', [
            'companies' => Company::all(),
        ]);
    }

    public function edit(Employee $employee)
    {
        return view('employee.edit', [
            'employee' => $employee,
            'companies' => Company::all(),
        ]);
    }

    public function update(EmployeeUpdateRequest $request, Employee $employee)
    {
        $formData = $request->validate([
            'name' => ['required'],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'email' => ['required', Rule::unique('employees', 'email')->ignore($employee->id)],
        ]);
        $employee->update($formData);

        return redirect('/employee');
    }

    public function destory(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}

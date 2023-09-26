<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyUpdateRequest;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CompanyController extends Controller
{
    public function dashboard()
    {
        return view('dashboard', [
            'companies' => Company::latest()
                ->paginate(6),
        ]);
    }

    public function employee(Company $company)
    {
        $employees = DB::table('employees')->where('company_id', $company->id)->paginate(8);

        return view('company.show', [
            'company' => $company,
            'employees' => $employees,
        ]);
    }

    public function index()
    {
        return view('company.index', [
            'companies' => Company::latest()->paginate(5),
        ]);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store()
    {
        $formData = request()->validate([
            'name' => ['required', 'max:100', 'min:5'],
            'email' => ['required', Rule::unique('companies', 'email')],
            'website' => ['required', Rule::unique('companies', 'website')],
        ]);
        $formData['logo'] = request('logo')->store('logos');
        Company::create($formData);

        return redirect('/company');
    }

    public function destory(Company $company)
    {
        $company->delete();

        return back();
    }

    public function edit(Company $company)
    {
        return view('company.edit', [
            'company' => $company,
        ]);
    }

    public function update(CompanyUpdateRequest $request, Company $company)
    {

        $formData = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'website' => ['required', Rule::unique('companies', 'website')->ignore($company->id)],
        ]);
        $formData['logo'] = request('logo') ? request('logo')->store('logos') : $company->logo;
        $company->update($formData);

        return redirect('/company');
    }
}

@props(["user"])
<x-admin-layout>
    <h3 class="my-3 text-center">Edit Employee Info</h3>

    <x-card-wrapper>
        <form
            action="/employee/{{ $employee->id }}/update"
            method="POST"
        >
            @method("patch")
            @csrf
            <x-form.input
                name="name"
                value="{{ $employee->name }}"
            />
            <x-form.select name="company_id">

                <option value="">Select Category</option>
                @foreach ($companies as $company)
                    <option
                        value="{{ $company->id }}"
                        {{ $company->id == $employee->company_id ? "selected" : " " }}
                    >{{ $company->name }}</option>
                @endforeach
            </x-form.select>
            <x-form.input
                name="email"
                value="{{ $employee->email }}"
            />
            <x-form.input
                name="phone"
                value="{{ $employee->phone }}"
            />
            <div class="d-flex justify-content-start mt-3">
                <button
                    type="submit"
                    class="btn btn-primary form-submit"
                >Update</button>
            </div>
        </form>
    </x-card-wrapper>

</x-admin-layout>

@props(["user"])
<x-admin-layout>
    <h3 class="my-3 text-center">Create Employee Info</h3>

    <x-card-wrapper>
        <form
            action="/employee/store"
            method="POST"
        >
            @csrf
            <x-form.input name="name" />
            <x-form.select name="company_id">

                <option value="">Select Category</option>
                @foreach ($companies as $company)
                    <option
                        {{ $company->id == old("company_id") ? "selected" : "" }}
                        value="{{ $company->id }}"
                    >

                        {{ $company->name }}
                    </option>
                @endforeach
            </x-form.select>
            <x-form.input name="email" />
            <x-form.input name="phone" />
            <div class="d-flex justify-content-start mt-3">
                <button
                    type="submit"
                    class="btn btn-primary form-submit"
                >Submit</button>
            </div>
        </form>
    </x-card-wrapper>

</x-admin-layout>

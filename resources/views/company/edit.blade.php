@props(["companies"])
<x-admin-layout>
    <h3 class="my-3 text-center">Edit Company Info</h3>

    <x-card-wrapper>
        <form
            enctype="multipart/form-data"
            action="/company/{{ $company->id }}/update"
            method="POST"
        >
            @method("patch")
            @csrf
            <x-form.input
                name="name"
                value="{{ $company->name }}"
            />

            <x-form.input
                name="email"
                value="{{ $company->email }}"
            />
            <x-form.input
                name="website"
                value="{{ $company->website }}"
            />

            <x-form.input
                name="logo"
                type="file"
            />
            <img
                src=" /storage/{{ $company->logo }}"
                alt=""
                width="100px"
                height="100px"
            >
            <div class="d-flex justify-content-start mt-3">
                <button
                    type="submit"
                    class="btn btn-primary form-submit"
                >Update</button>
            </div>
        </form>
    </x-card-wrapper>

</x-admin-layout>

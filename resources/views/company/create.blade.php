@props(["companies"])
<x-admin-layout>
    <h3 class="my-3 text-center">Create Company </h3>

    <x-card-wrapper>
        <form
            enctype="multipart/form-data"
            action="/company/store"
            method="POST"
        >
            @csrf
            <x-form.input name="name" />

            <x-form.input name="email" />
            <x-form.input name="website" />

            <x-form.input
                name="logo"
                type="file"
            />
            <div class="d-flex justify-content-start mt-3">
                <button
                    type="submit"
                    class="btn btn-primary form-submit"
                >Submit</button>
            </div>
        </form>
    </x-card-wrapper>

</x-admin-layout>

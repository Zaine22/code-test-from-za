<x-admin-layout>
    <div class="row g-0">
        <div class="col-10 d-flex justify-content-center">
            <h3 class="">Companies</h3>
        </div>
        <div class="col-2 d-flex justify-content-end">
            <form
                action="{{ route("logout") }}"
                method="post"
            >
                @csrf
                <button
                    type="submit"
                    class="btn btn-danger"
                >Logout</button>
            </form>
        </div>
    </div>
    <x-card-wrapper>
        <div class="row">
            @forelse ($companies as $company)
                <div class="col-md-4 mb-4">
                    <x-card :company="$company" />
                </div>
            @empty
                <p class='text-center'>NO Company FOUND</p>
            @endforelse
            {{ $companies->links() }}
        </div>
    </x-card-wrapper>
</x-admin-layout>

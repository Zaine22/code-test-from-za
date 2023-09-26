<x-admin-layout>
    <h3 class="text-center">Companies</h3>
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

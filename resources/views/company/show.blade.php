@props(["emplyees", "company"])
<x-admin-layout>
    <h3 class="text-center">Employee</h3>
    <x-card-wrapper>
        <div class="row">
            <div class="col-auto mr-auto">
                <h3>Employee lists of {{ $company->name }}</h3>
            </div>
            <div class="col-auto"><a
                    href="/company"
                    class="btn btn-primary"
                > Back</a></div>
        </div><br>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee's Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <p>No Employees found</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $employees->links() }}
    </x-card-wrapper>
</x-admin-layout>

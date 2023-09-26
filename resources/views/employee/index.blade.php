<x-admin-layout>
    <h3 class="text-center">Employee</h3>
    <x-card-wrapper>
        <div class="row">
            <div class="col-auto mr-auto">
                <h3>Employee Lists of All Company </h3>
            </div>
            <div class="col-auto"><a
                    href="/employee/create"
                    class="btn btn-success"
                >Create Employee</a></div>
        </div><br>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee's Name</th>
                    <th scope="col">Company</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th
                        scope="col"
                        colspan="2"
                    >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->company->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>

                        <td><a
                                href="/employee/{{ $employee->id }}/edit"
                                class="btn btn-warning"
                            >Edit</a></td>
                        <td>
                            <form
                                action="/employee/{{ $employee->id }}/delete"
                                method="POST"
                            >
                                @csrf
                                @method("DELETE")
                                <button
                                    type="submit"
                                    class="btn btn-danger"
                                >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $employees->links() }}
    </x-card-wrapper>
</x-admin-layout>

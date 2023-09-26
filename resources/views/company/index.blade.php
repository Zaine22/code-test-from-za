<x-admin-layout>
    <h3 class="text-center">Company</h3>

    {{-- <div class="row">
        <div class="col-md-12">
            <h3>Company Lists</h3>
        </div>
        <div class="col-md-12 ml-auto""><a
                href="/company/create"
                class="btn btn-primary"
            >Create</a></div>
    </div> --}}
    <x-card-wrapper>
        <div class="row">
            <div class="col-auto mr-auto">
                <h3>Company Lists</h3>
            </div>
            <div class="col-auto"><a
                    href="/company/create"
                    class="btn btn-success"
                >Create Company</a></div>
        </div><br>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Company's Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Logo</th>
                    <th scope="col">Website</th>
                    <th
                        scope="col"
                        colspan="2"
                    >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>{{ $company->email }}</td>
                        <td> <img
                                src="/storage/{{ $company->logo }}"
                                width="100"
                                height="100"
                                alt=""
                            ></td>
                        <td>{{ $company->website }}</td>

                        <td><a
                                href="/company/{{ $company->id }}/edit"
                                class="btn btn-warning"
                            >Edit</a></td>
                        <td>
                            <form
                                action="/company/{{ $company->id }}/delete"
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
        {{ $companies->links() }}
    </x-card-wrapper>

</x-admin-layout>

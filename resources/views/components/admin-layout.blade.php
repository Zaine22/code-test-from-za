<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-2 mt-3">
                <ul class="list-group mt-5">
                    <li class="list-group-item"><a
                            href="/dashboard"
                            style="text-decoration: none;"
                        >Dashboard</a></li>
                    <li class="list-group-item"><a
                            href="company"
                            style="text-decoration: none;"
                        >Company</a></li>
                    <li class="list-group-item"><a
                            href="employee"
                            style="text-decoration: none;"
                        >Employee</a></li>
                </ul>
            </div>
            <div class="col-md-10">{{ $slot }}</div>
        </div>
    </div>
</x-layout>

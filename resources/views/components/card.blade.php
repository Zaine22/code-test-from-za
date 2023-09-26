@props(["company"])
<div
    class="card"
    style="width: 18rem;"
>
    <img
        src='{{ asset("storage/$company->logo") }}'
        class="card-img-top"
        alt="Card image cap"
        width="200px"
        height="200px"
    />
    <div class="card-body">
        <a
            href="/company/{{ $company->id }}/employees"
            style="text-decoration: none;"
        >
            <h3 class="card-title">{{ ucwords($company->name) }}</h3>
        </a>
        <span>Click Company' Name for Employee lists</span>
        <p class="fs-6 text-secondary">

            <span>Website - {{ $company->website }}</span>
        </p>
        <a
            href="{{ $company->email }}"
            class="btn btn-primary"
        >Contact us - {{ $company->email }}</a>
    </div>
</div>

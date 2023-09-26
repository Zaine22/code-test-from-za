@props(["name"])
<x-form.input-wrapper>
    <label
        for="{{ $name }}"
        class="form-label"
    >Company</label>
    <select
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control editor"
    >{{ $slot }}</select>
    <x-error name="{{ $name }}" />
</x-form.input-wrapper>

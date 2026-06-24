@props(['name', 'label', 'type'])

<div class="flex flex-col gap-y-1">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name) }}" />
    <x-form.error name="{{ $name }}" />
</div>

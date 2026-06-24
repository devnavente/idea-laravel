@props([
    'name' => 'required',
])

<div>
    @error($name)
        <p class="error text-sm text-red-50 bg-red-500 mt-2">{{ $message }}</p>
    @enderror
</div>

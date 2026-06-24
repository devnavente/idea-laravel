@props([
    'method' => 'POST',
    'action' => '',
    'submit' => 'Submit',
])

<form method="{{ $method }}" action="{{ $action }}">
    @csrf
    {{ $slot }}

    <button type="submit" class="btn btn-primary">{{ $submit }}</button>
</form>

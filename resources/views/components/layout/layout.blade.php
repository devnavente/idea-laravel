<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-foreground">
    <x-layout.nav />

    <main class="max-w-7xl mx-auto px-6 pb-10">
        {{ $slot }}
    </main>

    @session('success')
        <div class="bg-primary px-4 py-3 bottom-4 right-4 rounded-lg" x-data="{ show: true }" x-show="show"
            x-init="setTimeout(() => show = false, 3000)">
            {{ $value }}
        </div>
    @endsession
</body>

</html>

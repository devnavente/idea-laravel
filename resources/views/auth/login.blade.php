<x-layout>
    <div class="flex min-h-screen items-center justify-center px-4">

        <div class="w-full max-w-md">

            <h1 class="text-3xl font-bold tracking-light">Welcome back!</h1>
            <p class="text-muted-foreground mt-1 mb-6">Keep tracking your ideas today.</p>

            <x-form method="POST" action="/login">
                <x-form.field name="email" label="email" type="email" />
                <x-form.field name="password" label="password" type="password" />
            </x-form>
        </div>
    </div>
</x-layout>

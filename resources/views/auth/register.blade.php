<x-layout>
    <div class="flex min-h-screen items-center justify-center px-4">

        <div class="w-full max-w-md">

            <h1 class="text-3xl font-bold tracking-light">Register an account</h1>
            <p class="text-muted-foreground mt-1 mb-6">Start tracking your ideas today.</p>

            <x-form method="POST" action="/register">
                <x-form.field name="name" label="name" type="text" />
                <x-form.field name="email" label="email" type="email" />
                <x-form.field name="password" label="password" type="password" />
            </x-form>
        </div>
    </div>
</x-layout>

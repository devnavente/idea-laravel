<x-layout>
    <div class="py-8 max-w-4xl mx-auto">
        <div class="flex justify-between items-center">
            <a href="{{ route('idea.index') }}" class="underline text-sm">
                - Back to Ideas
            </a>

            <div class="gap-x-3 flex items-center">
                <button class="btn btn-outlined">Edit</button>
                <form method="POST" action="{{ route('idea.destroy', $idea) }}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outlined text-red-400">Delete</button>
                </form>
            </div>
        </div>

        <h1 class="font-bol text-4xl">{{ $idea->title }}</h1>

        <div class="mt-2 mb-6 flex gap-x-3 items-center">
            <x-status-label status="{{ $idea->status }}">
                {{ $idea->status->label() }}
            </x-status-label>

            <p class="text-muted-foreground text-sm">{{ $idea->created_at->diffForHumans() }}</p>
        </div>

        <div class="text-foreground max-w-none border p-2">
            <p>{{ $idea->description }}</p>
        </div>

        <div>
            <h2 class="font-bold text-xl mt-6">Links</h2>

            @if ($idea->links)
                <div class="mt-6">
                    @foreach ($idea->links as $link)
                        <x-card>
                            <a href="{{ $link }}" class="underline text-primary">
                                {{ $link }}
                            </a>
                        </x-card>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</x-layout>

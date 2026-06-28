<x-layout>
    <div>
        <div class="py-8 md:py-12">
            <h1 class="text-3xl font-bold">Ideas</h1>
            <p class="text-muted-foreground text-sm mt-2">Capture your thoughts</p>
        </div>

        <div class="mt-10">
            <div class="mb-10">
                <a href="/" class="btn {{ request('status') ? 'btn-outlined' : '' }}">All
                    ({{ $statusCount->get('all') }})</a>
                @foreach (App\IdeaStatus::cases() as $status)
                    <a href="/ideas?status={{ $status->value }}"
                        class="btn {{ request('status') === $status->value ? '' : 'btn-outlined' }}">{{ $status->label() }}
                        ({{ $statusCount->get($status->value) }})
                    </a>
                @endforeach
            </div>
            <div class="grid md:grid-cols-2 gap-6 text-muted-foreground">
                @forelse($ideas as $idea)
                    <x-card>
                        <h2 class="text-foreground text-lg">
                            <a href="{{ route('idea.show', $idea) }}">{{ $idea->title }}</a>
                        </h2>
                        <div class="mt-1">
                            <x-status-label status="{{ $idea->status }}">
                                {{ $idea->status->label() }}
                            </x-status-label>
                        </div>

                        <p class="mt-5 line-clamp-3">{{ $idea->description }}</p>
                        <p class="mt-4">{{ $idea->created_at->diffForHumans() }}
                    </x-card>
                @empty
                    <p>No ideas created.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>

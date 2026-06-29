@props(['name', 'title'])

<div x-data="{ show: false, name: @js($name) }" x-show="show" @open-modal.window="show = true" @keydown.escape.window="show = false"
    x-transition:enter="ease-out duration-250" x-transition:enter-start="opacity-0 -translate-y-24 -translate-x-24"
    x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-250" x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0 -translate-y-4"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-xs" style="display:none;"
    role="dialog" aria-modal="true" aria-labelledby="modal-{{ $name }}-title" :aria-hidden="!show"
    tabindex="-1" :inert="!show">
    <div @click.away="show = false">
        <div>
            <h2 id="modal-{{ $name }}-title" class="text-2xl font-bold">{{ $title }}</h2>
        </div>

        <div>
            {{ $slot }}
        </div>
    </div>
</div>

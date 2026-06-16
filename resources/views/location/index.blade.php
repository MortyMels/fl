<x-app>
    @foreach ($locations as $location)
    <flux:card size="sm" class="hover:bg-zinc-50 dark:hover:bg-zinc-700 mb-5">
        <flux:heading class="flex items-center gap-2">
            {{ $location->name }}
            <flux:icon name="arrow-up-right" class="ml-auto text-zinc-400" variant="micro" />
        </flux:heading>
        <flux:text class="mt-2">{{ $location->branch?->name ?? 'No branch' }}</flux:text>
        <flux:text class="mt-2">{{ $location->address }}</flux:text>
    </flux:card>
    @endforeach
</x-app>
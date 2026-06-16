<x-app>
    @foreach ($entities as $entity)
    <flux:card size="sm" class="hover:bg-zinc-50 dark:hover:bg-zinc-700 mb-5">
        <flux:heading class="flex items-center gap-2">
            {{ $entity->name }}
            <flux:icon name="arrow-up-right" class="ml-auto text-zinc-400" variant="micro" />
        </flux:heading>
        <flux:text class="mt-2">{{ $entity->entitysection?->name ?? 'No entitysection' }}</flux:text>
        <flux:text class="mt-2">{{ $entity->location?->name ?? 'No location' }}</flux:text>
        <flux:text class="mt-2">{{ $entity->description ?? 'No description' }}</flux:text>
    </flux:card>
    @endforeach
</x-app>
<x-app>
    @foreach ($sections as $section)
    <flux:card size="sm" class="hover:bg-zinc-50 dark:hover:bg-zinc-700 mb-5">
        <flux:heading class="flex items-center gap-2">
            {{ $section->name }}
            <flux:icon name="arrow-up-right" class="ml-auto text-zinc-400" variant="micro" />
        </flux:heading>
        <flux:text class="mt-2">{{ $section->description ?? 'No description' }}</flux:text>
    </flux:card>
    @endforeach
</x-app>
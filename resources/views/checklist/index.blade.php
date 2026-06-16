<x-app>
    @foreach ($checklists as $checklist)
        <flux:card class="mb-5 cursor-pointer hover:bg-zinc-50 dark:hover:bg-zinc-700" onclick="window.location='{{ route('checklists.edit', $checklist->id) }}'">
            <flux:heading class="flex items-center gap-2">
                {{ $checklist->name }}
                <flux:icon name="arrow-up-right" class="ml-auto text-zinc-400" variant="micro" />
            </flux:heading>
            <flux:text class="mt-2">{{ $checklist->description }}</flux:text>
        </flux:card>
    @endforeach
</x-app>
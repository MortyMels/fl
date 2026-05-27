<x-app>
    @foreach ($branches as $branch)
    <flux:card size="sm" class="hover:bg-zinc-50 dark:hover:bg-zinc-700 mb-5">
        <flux:heading class="flex items-center gap-2">{{ $branch->organization?->name }}<flux:icon name="arrow-up-right" class="ml-auto text-zinc-400" variant="micro" /></flux:heading>
        <flux:text class="mt-2">{{ $branch->sname }}</flux:text>
        <flux:text class="mt-2">{{ $branch->address }}</flux:text>
    </flux:card>
    @endforeach
</x-app>
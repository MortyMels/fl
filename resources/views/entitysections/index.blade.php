<x-app>
    <div class="max-w-sm mx-auto">
        <h1 class="text-xl font-bold mb-4">Группы объектов</h1>
        <ul class="space-y-4">
            @foreach ($entitysections as $section)
                <li class="p-4 bg-neutral-secondary-medium rounded-base border border-default-medium">
                    <div class="font-medium text-heading">{{ $section->name }}</div>
                    <div class="text-sm text-body">{{ $section->description }}</div>
                    <div class="text-xs mt-2 {{ $section->public ? 'text-green-500' : 'text-gray-400' }}">
                        {{ $section->public ? 'Публичный' : 'Приватный' }}
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app>
<x-app>
    <ul>
        @foreach ($checklistpoints as $checklistpoint)
            <li>{{ $checklistpoint->checklistsection?->name }}</li>
            <li>{{ $checklistpoint->requirement }}</li>
            <li>{{ $checklistpoint->description }}</li>
        @endforeach
    </ul>
</x-app>
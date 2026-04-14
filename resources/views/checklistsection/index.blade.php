<x-app>
    <ul>
        @foreach ($checklistsections as $checklistsection)
            <li>{{ $checklistsection->name }}</li>
        @endforeach
    </ul>
</x-app>
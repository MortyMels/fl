<x-app>
    <ul>
        @foreach ($locations as $location)
            <li>{{ $location->branch?->name }}</li>
            <li>{{ $location->address }}</li>
            <li>{{ $location->name }}</li>
        @endforeach
    </ul>
</x-app>
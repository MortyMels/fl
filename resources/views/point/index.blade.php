<x-app>
    <ul>
        @foreach ($points as $point)
            <li>{{ $point->section?->name }}</li>
            <li>{{ $point->requirement }}</li>
            <li>{{ $point->description }}</li>
        @endforeach
    </ul>
</x-app>
<x-app>
    <ul>
        @foreach ($sections as $section)
            <li>{{ $section->name }}</li>
        @endforeach
    </ul>
</x-app>
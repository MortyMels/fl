<x-app>
    <ul>
        @foreach ($branches as $branch)
            <li>{{ $branch->organization?->name }}</li>
            <li>{{ $branch->sname }}</li>
            <li>{{ $branch->address }}</li>
        @endforeach
    </ul>
</x-app>
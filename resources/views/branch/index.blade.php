<x-app>
    <ul>
        @foreach ($branches as $branch)
            <li>{{ $organization->name }}</li>
            <li>{{ $organization->sname }}</li>
            <li>{{ $organization->address }}</li>
        @endforeach
    </ul>
</x-app>
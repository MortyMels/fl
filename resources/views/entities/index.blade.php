<x-app>
    <ul>
        @foreach ($entities as $entity)
            <li>{{ $entity->name }}</li>
            <li>{{ $entity->description }}</li>
        @endforeach
    </ul>
</x-app>
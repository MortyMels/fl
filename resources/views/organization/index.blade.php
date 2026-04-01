<div class="rounded-base shadow-xs w-56 -space-y-px" role="group">
    @foreach ($organizations as $organization)
        <button type="button" class="block w-full text-body bg-neutral-primary-soft border border-default hover:bg-neutral-secondary-medium hover:text-heading focus:ring-3 focus:ring-neutral-tertiary-soft rounded-t-base font-medium leading-5 text-sm px-3 py-2 focus:outline-none">
            {{ $organization->name }}
        </button>
    @endforeach
</div>

<ul>
    @foreach ($organizations as $organization)
        <li>{{ $organization->name }}</li>
    @endforeach
</ul>
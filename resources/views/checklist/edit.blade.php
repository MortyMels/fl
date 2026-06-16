<x-app>
    @csrf



    @php
        $sections = \App\Models\Section::with('points')->get();
        $selected = $checklist->points->pluck('id')->toArray();
    @endphp
    <form class="max-w-sm mx-auto space-y-6" action="{{ route('checklists.add-points', $checklist->id) }}" method="POST">
        <flux:field>
        <flux:heading level="2">{{ $checklist->name }}</flux:heading>
        <flux:text class="text-sm text-zinc-500">{{ $checklist->description }}</flux:text>
    </flux:field>
    @csrf
@foreach($sections as $section)
    <flux:checkbox.group wire:model="subscription" label="{{ $section->name }}">
        @foreach($section->points as $point)
            <flux:checkbox
                name="points[]"
                value="{{ $point->id }}"
                label="{{ $point->name }}"
                description="{{ $point->description }}"
                
                />
        @endforeach
            
    </flux:checkbox.group>
@endforeach

  <flux:button type="submit">Submit</flux:button>


</x-app>



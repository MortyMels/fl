<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('entities.store') }}" method="POST">

  <flux:field>
    <flux:select name="entity_section_id" placeholder="Выберите группу" label="Группа (Секция)">
      @foreach($entitysections as $section)
        <flux:select.option value="{{ $section->id }}">{{ $section->name }}</flux:select.option>
      @endforeach
    </flux:select>
  </flux:field>
  <flux:field>
    <flux:select name="location_id" placeholder="Выберите локацию" label="Локация">
      @foreach($locations as $location)
        <flux:select.option value="{{ $location->id }}">{{ $location->name }}</flux:select.option>
      @endforeach
    </flux:select>
  </flux:field>
  <flux:field><flux:input name="name" label="Название объекта" /></flux:field>
  <flux:field><flux:input name="description" label="Описание" type="textarea" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
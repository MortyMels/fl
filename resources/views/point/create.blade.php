<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('points.store') }}" method="POST">

  <flux:field>
    <flux:select name="section_id" placeholder="Выберите категорию" label="Категория требований">
      @foreach($sections as $section)
        <flux:select.option value="{{ $section->id }}">{{ $section->name }}</flux:select.option>
      @endforeach
    </flux:select>
  </flux:field>
  <flux:field><flux:input name="name" label="Требование" /></flux:field>
  <flux:field><flux:input name="description" label="Расшифровка требования" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
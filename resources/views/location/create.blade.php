<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('locations.store') }}" method="POST">

  <flux:field>
    <flux:select name="branch_id" placeholder="Выберите филиал" label="Филиал">
      @foreach($branches as $branch)
        <flux:select.option value="{{ $branch->id }}">{{ $branch->name }}</flux:select.option>
      @endforeach
    </flux:select>
  </flux:field>
  <flux:field><flux:input name="name" label="Название локации" /></flux:field>
  <flux:field><flux:input name="address" label="Адрес локации" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
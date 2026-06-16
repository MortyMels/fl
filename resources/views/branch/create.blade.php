<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('branches.store') }}" method="POST">

  <flux:field>
    <flux:select name="organization_id" placeholder="Выберите организацию" label="Организация">
      @foreach($organizations as $organization)
        <flux:select.option value="{{ $organization->id }}">{{ $organization->name }}</flux:select.option>
      @endforeach
    </flux:select>
  </flux:field>
  <flux:field><flux:input name="name" label="Полное наименование" /></flux:field>
  <flux:field><flux:input name="sname" label="Сокращенное наименование" /></flux:field>
  <flux:field><flux:input name="address" label="Адрес" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
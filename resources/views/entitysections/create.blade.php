<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('entitysections.store') }}" method="POST">

  <flux:field><flux:input name="name" label="Название группы" /></flux:field>
  <flux:field><flux:input name="description" label="Описание" type="textarea" /></flux:field>
  <flux:field>
    <flux:select name="public" label="Доступность">
      <flux:select.option value="1">Публичный</flux:select.option>
      <flux:select.option value="0">Приватный</flux:select.option>
    </flux:select>
  </flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
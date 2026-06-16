<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('organizations.store') }}" method="POST">

  <flux:field><flux:input name="name" label="Полное наименование организации" /></flux:field>
  <flux:field><flux:input name="sname" label="Сокращенное наименование организации" /></flux:field>
  <flux:field><flux:input name="tin" label="ИНН" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
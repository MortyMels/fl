<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('checklists.store') }}" method="POST">

  <flux:field><flux:input name="name" label="Название чеклиста" /></flux:field>
  <flux:field><flux:input name="description" label="Описание чеклиста" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
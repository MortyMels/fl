<x-app>

<form class="max-w-sm mx-auto space-y-6" action="{{ route('sections.store') }}" method="POST">

  <flux:field><flux:input name="name" label="Категория требований" /></flux:field>
  <flux:button type="submit">Submit</flux:button>
  @csrf
</form>

</x-app>
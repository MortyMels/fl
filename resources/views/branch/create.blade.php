<x-app>
    
<form class="max-w-sm mx-auto" action="{{ route('branches.store') }}" method="POST">

  <flux:select class="mb-5" name="organization_id" wire:model="industry" placeholder="Выберите организацию" label="Организация" >
    @foreach($organizations as $organization)
      <flux:select.option value="{{ $organization->id }}">{{ $organization->name }}</flux:select.option>
    @endforeach
  </flux:select>
  <flux:input class="mb-5" name="name" label="Полное наименование организации" />
  <flux:input class="mb-5" name="sname" label="Сокращенное наименование организации" />
  <flux:input class="mb-5" name="address" label="Адресс" />
  <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
  @csrf
  @error('name')
      <div class="text-red-500 text-xs">{{ $message }}</div>
  @enderror
    @error('sname')
      <div class="text-red-500 text-xs">{{ $message }}</div>
  @enderror
    @error('address')
      <div class="text-red-500 text-xs">{{ $message }}</div>
  @enderror
</form>

</x-app>
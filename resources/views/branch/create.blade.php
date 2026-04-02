<x-app>
    
<!-- <form class="max-w-sm mx-auto" action="{{ route('branches.store') }}" method="POST">
  <div class="mb-5">
    <label for="organization_id" class="block mb-2.5 text-sm font-medium text-heading">Организация</label>
    <select name="organization_id" id="organization_id" class="block w-full px-3 py-2.5 ...">
        <option value="" disabled selected>Выберите организацию</option>
        @foreach($organizations as $organization)
            <option value="{{ $organization->id }}">{{ $organization->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-5">
    <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Полное наименование организации</label>
    <input type="text" name="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Текст" required />
  </div>
  <div class="mb-5">
    <label for="sname" class="block mb-2.5 text-sm font-medium text-heading">Сокращенное наименование организации</label>
    <input type="text" name="sname" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Текст" required />
  </div>
  <div class="mb-5">
    <label for="tin" class="block mb-2.5 text-sm font-medium text-heading">Адресс</label>
    <input type="text" name="address" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Текст" required />
  </div>
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
</form> -->

</x-app>
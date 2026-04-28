<x-app>
    
<form class="max-w-sm mx-auto" action="{{ route('points.store') }}" method="POST">
  <div class="mb-5">
    <label for="_section_id" class="block mb-2.5 text-sm font-medium text-heading">Категория требований</label>
    <select name="_section_id" id="_section_id" class="block w-full px-3 py-2.5 ...">
        <option value="" disabled selected>Выберите категорию</option>
        @foreach($sections as $section)
            <option value="{{ $section->id }}">{{ $section->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="mb-5">
    <label for="requirement" class="block mb-2.5 text-sm font-medium text-heading">Требование</label>
    <input type="text" name="requirement" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Текст" required />
  </div>
  <div class="mb-5">
    <label for="description" class="block mb-2.5 text-sm font-medium text-heading">Сокращенное наименование организации</label>
    <input type="text" name="description" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Текст" required />
  </div>
  
  <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
  @csrf
  @error('section_id')
    <div class="text-red-500 text-xs">{{ $message }}</div>
  @enderror
  @error('requirement')
    <div class="text-red-500 text-xs">{{ $message }}</div>
  @enderror
  @error('description')
    <div class="text-red-500 text-xs">{{ $message }}</div>
  @enderror
</form>

</x-app>
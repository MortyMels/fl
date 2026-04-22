<x-app>
    <form class="max-w-sm mx-auto" action="{{ route('entitysections.store') }}" method="POST">
        @csrf

        <div class="mb-5">
            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Название группы</label>
            <input type="text" name="name" value="{{ old('name') }}" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs" placeholder="Например: Помещения" required />
            @error('name') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2.5 text-sm font-medium text-heading">Описание</label>
            <textarea name="description" rows="3" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs">{{ old('description') }}</textarea>
            @error('description') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="mb-5">
            <label for="public" class="block mb-2.5 text-sm font-medium text-heading">Доступность</label>
            <select name="public" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs">
                <option value="1" {{ old('public') == '1' ? 'selected' : '' }}>Публичный</option>
                <option value="0" {{ old('public') == '0' ? 'selected' : '' }}>Приватный</option>
            </select>
        </div>

        <button type="submit" class="text-white bg-brand hover:bg-brand-strong font-medium rounded-base text-sm px-4 py-2.5 w-full">
            Создать группу
        </button>
    </form>
</x-app>
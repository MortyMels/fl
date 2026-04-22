<x-app>
    <form class="max-w-sm mx-auto" action="{{ route('entities.store') }}" method="POST">
        @csrf

        {{-- Выбор группы --}}
        <div class="mb-5">
            <label for="entity_section_id" class="block mb-2.5 text-sm font-medium text-heading">Группа (Секция)</label>
            <select name="entity_section_id" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs" required>
                <option value="" disabled selected>Выберите группу</option>
                @foreach($entitysections as $section)
                    <option value="{{ $section->id }}" {{ old('entity_section_id') == $section->id ? 'selected' : '' }}>
                        {{ $section->name }}
                    </option>
                @endforeach
            </select>
            @error('entity_section_id') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        {{-- Выбор локации (добавил, так как она есть в модели) --}}
        <div class="mb-5">
            <label for="location_id" class="block mb-2.5 text-sm font-medium text-heading">Локация</label>
            <select name="location_id" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs" required>
                <option value="" disabled selected>Выберите локацию</option>
                @foreach($locations as $location)
                    <option value="{{ $location->id }}" {{ old('location_id') == $location->id ? 'selected' : '' }}>
                        {{ $location->name }}
                    </option>
                @endforeach
            </select>
            @error('location_id') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="mb-5">
            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Название объекта</label>
            <input type="text" name="name" value="{{ old('name') }}" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Например: Кабинет 101" required />
            @error('name') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <div class="mb-5">
            <label for="description" class="block mb-2.5 text-sm font-medium text-heading">Описание</label>
            <textarea name="description" rows="3" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs" placeholder="Краткое описание объекта..." required>{{ old('description') }}</textarea>
            @error('description') <div class="text-red-500 text-xs mt-1">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="text-white bg-brand hover:bg-brand-strong font-medium rounded-base text-sm px-4 py-2.5 w-full">
            Создать объект
        </button>
    </form>
</x-app>
<x-app>
    <form class="max-w-sm mx-auto" action="{{ route('locations.store') }}" method="POST">
        @csrf

        {{-- Выбор филиала --}}
        <div class="mb-5">
            <label for="branch_id" class="block mb-2.5 text-sm font-medium text-heading">Филиал</label>
            <select name="branch_id" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs" required>
                <option value="" disabled selected>Выберите филиал</option>
                @foreach($branches as $branch)
                    <option value="{{ $branch->id }}" {{ old('branch_id') == $branch->id ? 'selected' : '' }}>
                        {{ $branch->name }}
                    </option>
                @endforeach
            </select>
            @error('branch_id')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Название локации --}}
        <div class="mb-5">
            <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Название локации</label>
            <input type="text" name="name" value="{{ old('name') }}" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Например: Корпус А или Поликлиника №2" required />
            @error('name')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Адрес --}}
        <div class="mb-5">
            <label for="address" class="block mb-2.5 text-sm font-medium text-heading">Адрес локации</label>
            <input type="text" name="address" value="{{ old('address') }}" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Улица, дом, индекс" required />
            @error('address')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
            Создать локацию
        </button>
    </form>
</x-app>
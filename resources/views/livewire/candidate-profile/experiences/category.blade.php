<div class="w-full my-4">
    <x-label for="categories" :value="__('Categoria')" />
    <select
        id="categories"
        wire:model="categorySelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option value="">-- Seleccione --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->categoria }}</option>
        @endforeach
    </select>

    @error('categorySelected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

</div>

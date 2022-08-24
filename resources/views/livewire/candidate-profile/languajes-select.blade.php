<div class="w-full">
    <x-label for="languajes-for-candidates" :value="__('Idiomas')" />
    <select
        id="languajes-for-candidates"
        wire:model="languageSelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option value="">-- Seleccione --</option>
        @foreach ($languages as $language)
            <option value="{{ $language->id }}">{{$language->nombre_idioma}}</option>
        @endforeach
    </select>

    @error('languageSelected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror
</div>

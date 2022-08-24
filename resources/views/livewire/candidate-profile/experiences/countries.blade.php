<div class="w-full my-4">
    <x-label for="countries" :value="__('Pais')" />
    <select
        id="countries"
        wire:model="countrySelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option value="">-- Seleccione --</option>
        @foreach ($countries as $country)
            <option value="{{ $country->id }}">{{$country->pais }}</option>
        @endforeach
    </select>

    @error('countrySelected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror


</div>

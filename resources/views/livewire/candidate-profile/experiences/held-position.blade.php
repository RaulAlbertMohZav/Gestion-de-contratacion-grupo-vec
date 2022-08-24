<div class="w-full my-4">
    <x-label for="held-position" :value="__('Cargo Desempeñado')" />
    <select
        id="held-position"
        wire:model="heldPositionSelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option value="">-- Seleccione --</option>
        @foreach ($heldPositions as $heldPosition)
            <option value="{{ $heldPosition->id }}">{{$heldPosition->cargo_desempenado }}</option>
        @endforeach
    </select>

    @error('heldPositionSelected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

</div>

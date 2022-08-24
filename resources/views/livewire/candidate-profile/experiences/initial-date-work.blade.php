<div class="w-full">
    <x-label for="fecha_inicial_trabajo" :value="__('Fecha inicial del trabajo')" />
    <x-input
        id="fecha_inicial_trabajo"
        class="block mt-1 w-full"
        type="date"
        wire:model="initial_date_selected"
    />

    @error('initial_date_selected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror
</div>

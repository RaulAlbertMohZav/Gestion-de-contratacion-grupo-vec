<div class="w-full">
    <x-label for="fecha_final_trabajo" :value="__('Fecha final del trabajo')" />
    <x-input
        id="fecha_final_trabajo"
        class="block mt-1 w-full"
        type="date"
        wire:model="final_date_selected"
    />

    @error('final_date_selected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror
</div>

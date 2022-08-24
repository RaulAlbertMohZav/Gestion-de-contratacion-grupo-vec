<form class="md:w-1/2 space-y-5 mx-auto" wire:submit.prevent="saveLanguage">
    @livewire('candidate-profile.languajes-select',['languageSelected' => $language->base_idioma_id])
    @error('education.base_idioma_id')

    <livewire:mostrar-alerta :message="$message" />
    @enderror
    <div class="w-full my-4">
        <x-label for="levels-languaje" :value="__('Nivel de dominio')" />
        <select
            id="countries"
            wire:model="language.nivel"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($language_levels as $language_level)
                <option value="{{ $language_level }}">{{ $language_level }}</option>
            @endforeach
        </select>

        @error('education.nivel')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <div class="flex justify-end items-center py-20">
        <x-button type="submit">
            Guardar Idioma
        </x-button>
    </div>
</form>

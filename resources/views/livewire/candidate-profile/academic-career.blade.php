<form class="md:w-1/2 space-y-5 mx-auto" wire:submit.prevent="saveEducation">
    <div class="w-full my-4">
        <x-label for="countries" :value="__('Educacion')" />
        <select
            id="countries"
            wire:model="education.escolaridad"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($scholarships as $scholarship)
                <option value="{{ $scholarship }}">{{ $scholarship }}</option>
            @endforeach
        </select>

        @error('education.escolaridad')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <section class="w-full my-4">
        <x-label for="career" :value="__('Titulo')" />
        <x-input id="career" class="block mt-1 w-full" type="text" wire:model="education.titulo" required autofocus />

        @error('education.titulo')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>
    <section class="w-full my-4">
        <x-label for="school" :value="__('Institucion')" />
        <x-input id="school" class="block mt-1 w-full" type="text" wire:model="education.nombre_institucion" required autofocus />

        @error('education.nombre_institucion')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>
    @livewire('candidate-profile.experiences.countries', [
        'countrySelected' => $education->pais_id
    ])
    <section class="w-full my-4">
        <x-label for="año_finalizacion" :value="__('Año de finalizacion')" />
        <x-input id="año_finalizacion" class="block mt-1 w-full" type="text" wire:model="education.ano_finalizacion" required autofocus />

        @error('education.ano_finalizacion')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>
    <div class="flex justify-end items-center py-20">
        <x-button type="submit">
            Guardar educacion
        </x-button>
    </div>
</form>

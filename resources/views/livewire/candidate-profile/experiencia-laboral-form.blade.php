<form class="md:w-1/2 space-y-5 mx-auto" wire:submit.prevent="saveExperienceWork">
    <section class="w-full my-4">
        <x-label for="nombre-cargo" :value="__('Nombre del cargo')" />
        <x-input id="nombre-cargo" class="block mt-1 w-full" type="text" wire:model="experienciaLaboral.nombre_cargo" required autofocus />

        @error('experienciaLaboral.nombre_cargo')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>
    <section class="w-full my-4">
        <x-label for="compania" :value="__('Compañia')" />
        <x-input id="compania" class="block mt-1 w-full" type="text" wire:model="experienciaLaboral.compania" required autofocus />
        @error('experienciaLaboral.compania')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>
    @livewire('candidate-profile.experiences.countries', [
        'countrySelected' => $experienciaLaboral->pais_id
    ])
    @error('experienciaLaboral.pais_id')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

    @livewire('candidate-profile.experiences.activity', [
        'activitySelected' => $experienciaLaboral->actividad_id
    ])
    @error('experienciaLaboral.actividad_id')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

    @livewire('candidate-profile.experiences.category', [
        'categorySelected' => $experienciaLaboral->categoria_id
    ])
    @error('experienciaLaboral.categoria_id')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

    @livewire('candidate-profile.experiences.held-position', [
        'categorySelectedUpdate' => $experienciaLaboral->categoria_id,
        'heldPositionSelected' => $experienciaLaboral->cargo_desempenado_id
    ])
    @error('experienciaLaboral.cargo_desempenado_id')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

    @livewire('candidate-profile.experiences.salary', [
        'salarySelected' => $experienciaLaboral->salario_id
    ])
    @error('experienciaLaboral.salario_id')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

    <div class="grid grid-cols-2 gap-2 mb-8">
        @livewire('candidate-profile.experiences.initial-date-work', [
            'initial_date_selected' => $experienciaLaboral->fecha_inicio_trabajo
        ])
        @livewire('candidate-profile.experiences.final-date-work', [
            'final_date_selected' => $experienciaLaboral->fecha_final_trabajo
        ])
    </div>

    <section class="w-full my-4">
        <x-label for="beneficios" :value="__('Beneficios recibidos')" />
        <x-input id="beneficios" class="block mt-1 w-full" type="text" wire:model="experienciaLaboral.beneficios" required autofocus />

        @error('experienciaLaboral.beneficios')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>

    <section class="w-full my-4">
        <x-label for="descripcion-cargo" :value="__('Descripcion del cargo')" />
        <x-input id="descripcion-cargo" class="block mt-1 w-full" type="text" wire:model="experienciaLaboral.descripcion" required autofocus />

        @error('experienciaLaboral.descripcion')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </section>

    <div class="flex justify-end items-center py-20">
        <x-button type="submit">
            Guardar Experiencia Laboral
        </x-button>
    </div>

</form>

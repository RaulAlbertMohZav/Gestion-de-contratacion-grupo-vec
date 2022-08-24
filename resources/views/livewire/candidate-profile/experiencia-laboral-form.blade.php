<form class="md:w-1/2 space-y-5 mx-auto" wire:submit.prevent="saveExperiencieWork">
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
    @livewire('candidate-profile.experiences.activity', [
        'activitySelected' => $experienciaLaboral->actividad_id
    ])
    @livewire('candidate-profile.experiences.category', [
        'categorySelected' => $experienciaLaboral->categoria_id
    ])
    @livewire('candidate-profile.experiences.held-position', [
        'categorySelectedUpdate' => $experienciaLaboral->categoria_id,
        'heldPositionSelected' => $experienciaLaboral->cargo_desempenado_id
    ])
    @livewire('candidate-profile.experiences.salary', [
        'salarySelected' => $experienciaLaboral->salario_id
    ])
</form>

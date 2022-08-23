<div class="w-full">
    <x-label for="experiences" :value="__('Experiencias Laborales')" />
    <hr>
    <div class="grid grid-cols-3 gap-3">
        @foreach($experiencias_laborales as $experiencia_laboral)
            <div>
                <x-button class="w-full justify-center">
                    {{ $experiencia_laboral->nombre_cargo }}
                </x-button>
            </div>
        @endforeach
    </div>
    <div class="w-full flex justify-end">
        <div class="w-1/2 flex justify-end">
            <x-button>
                Agregar experiencia laboral
            </x-button>
        </div>
    </div>
</div>

<form class="space-y-5 md:w-1/2" wire:submit.prevent='editarVacante'>
    {{--@if(count($errors->all()) > 0)
        <p>{{ $errors->first() }}</p>
    @endif--}}
    <div>
        <x-label for="titulo" :value="__('Titulo Vacante')" />
        <x-input
            id="titulo"
            class="block w-full mt-1"
            type="text"
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Titulo Vacante"
        />

        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="salario" :value="__('Salario Mensual')" />
        <select
            id="salario"
            wire:model="salario"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
            <option>-- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{$salario->salario}}</option>
            @endforeach
        </select>

        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="categoria" :value="__('Categoría')" />
        <select
            id="categoria"
            wire:model="categoria"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
            <option>-- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{$categoria->categoria}}</option>
            @endforeach
        </select>

        @error('categoria')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="cargo_laboral" :value="__('Cargo Laboral deseado')" />
        <select
            id="cargo_laboral"
            wire:model="cargo_desempenado"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($cargos_desempenados as $cargo)
                <option value="{{ $cargo->id }}">{{$cargo->cargo_desempenado}}</option>
            @endforeach
        </select>

        @error('cargo_desempenado')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="tiempo_experiencia_laboral" :value="__('Años de Experiencia para el cargo laboral')" />
        <select
            id="tiempo_experiencia_laboral"
            wire:model="yearOfExperienceSelected"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($yearsOfExperience as $year)
                <option value="{{ $year }}">{{ $year }}</option>
            @endforeach
        </select>

        @error('yearOfExperienceSelected')
        <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="empresa" :value="__('Empresa')" />
        <x-input
            id="empresa"
            class="block w-full mt-1"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify"
        />

        @error('empresa')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="ultimo_dia" :value="__('Último Día para postularse')" />
        <x-input
            id="ultimo_dia"
            class="block w-full mt-1"
            type="date"
            wire:model="ultimo_dia"
            :value="old('ultimo_dia')"
        />

        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-label for="descripcion" :value="__('Descripción Puesto')" />
        <textarea
            wire:model="descripcion"
            placeholder="Descripción general del puesto, experiencia"
            class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 h-72"
        ></textarea>

        @error('descripcion')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div wire:key="error-alert-image-{{ auth()->user()->id }}">
        <x-label for="imagen" :value="__('Imagen')" />
        <x-input
            id="imagen"
            class="block w-full mt-1"
            type="file"
            wire:model="imagen_nueva"
            accept="image/*"
        />

        @error('imagen')
            <livewire:mostrar-alerta :message="$message" />
        @enderror

        <div class="my-5 w-80">
            <x-label :value="__('Imagen Actual')" />

            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante ' . $titulo }}">
        </div>

        <div class="my-5 w-80">
            @if($imagen_nueva)
                Imagen Nueva:
                <img src="{{ $imagen_nueva->temporaryUrl() }}" >
            @endif
        </div>



        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <x-button type="submit">
        Guardar Cambios
    </x-button>

</form>

<div class="w-full my-4">
    <x-label for="salary-experience" :value="__('Salario')" />
    <select
        id="salary-experience"
        wire:model="salarySelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option value="">-- Seleccione --</option>
        @foreach ($salaries as $salary)
            <option value="{{ $salary->id }}">{{$salary->salario }}</option>
        @endforeach
    </select>

    @error('salarySelected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror

</div>

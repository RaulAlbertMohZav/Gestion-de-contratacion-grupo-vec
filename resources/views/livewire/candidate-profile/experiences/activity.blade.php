<div class="w-full my-4">
    <x-label for="activities" :value="__('Actividad')" />
    <select
        id="activities"
        wire:model="activitySelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option>-- Seleccione --</option>
        @foreach ($activities as $activity)
            <option value="{{ $activity->id }}">{{$activity->nombre_actividad }}</option>
        @endforeach
    </select>

    @error('activitySelected')
    <livewire:mostrar-alerta :message="$message" />
    @enderror
</div>

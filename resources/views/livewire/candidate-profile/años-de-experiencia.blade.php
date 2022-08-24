<div class="grid grid-cols-2 gap-2">
    <div class="flex items-center">
        <x-label for="years-of-experience" :value="__('Años de experiencia')" />
    </div>
    <div class="flex items-center">
        <select
            id="years-of-experience"
            wire:model="yearOfExperienceSelected"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
            <option value="">-- Seleccione --</option>
            @foreach ($yearsOfExperience as $yearOfExperience)
                <option value="{{ $yearOfExperience }}">{{$yearOfExperience}}</option>
            @endforeach
        </select>
        @error('yearOfExperienceSelected')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>


</div>

@push('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function () {
            Livewire.on('toJSEmit-yearOfExperienceForCandidateSaved', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'La información de años de experiencia ha sido guardada',
                    showConfirmButton: false,
                    timer: 3000
                })
            })
        }) ()
    </script>
@endpush

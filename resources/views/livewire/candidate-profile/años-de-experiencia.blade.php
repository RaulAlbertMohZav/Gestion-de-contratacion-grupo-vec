<div>
    <x-label for="years-of-experience" :value="__('Años de experiencia')" />
    <select
        id="years-of-experience"
        wire:model="yearOfExperienceSelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option>-- Seleccione --</option>
        @foreach ($yearsOfExperience as $yearOfExperience)
            <option value="{{ $yearOfExperience }}">{{$yearOfExperience}}</option>
        @endforeach
    </select>

    @error('yearOfExperienceSelected')
        <livewire:mostrar-alerta :message="$message" />
    @enderror
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

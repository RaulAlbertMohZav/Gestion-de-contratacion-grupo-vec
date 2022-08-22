<div>

    <x-label for="categories-for-candidates" :value="__('Expectativa Laboral')" />
    <select
        id="categories-for-candidates"
        wire:model="categorySelected"
        class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full"
    >
        <option>-- Seleccione --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{$category->cargo_desempenado}} - {{ $category->categoria->categoria }}</option>
        @endforeach
    </select>

    @error('categorySelected')
        <livewire:mostrar-alerta :message="$message" />
    @enderror
</div>

@push('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function () {
            Livewire.on('toJSEmit-CategoryForCandidateSaved', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Expectativa laboral guardada',
                    showConfirmButton: false,
                    timer: 3000
                })
            })
        }) ()
    </script>
@endpush

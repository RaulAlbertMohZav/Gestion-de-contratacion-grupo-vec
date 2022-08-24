<div class="w-full">
    <x-label for="educations" :value="__('Educaciones')" />
    <hr>
    <div class="grid grid-cols-3 gap-3 py-9">
        @foreach($educations as $education)
            <div>

                <a href="{{ route('edit.education', $education->id) }}" class="w-full justify-center inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('create.experience_work') }}">
                    "{{ $education->escolaridad }}" < {{ $education->titulo }} >
                </a>
            </div>
        @endforeach
    </div>
    <div class="w-full flex justify-end">
        <div class="w-1/2 flex justify-end">
            <a class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" href="{{ route('create.education') }}">
                Agregar educacion
            </a>
        </div>
    </div>
</div>

<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if(session()->has('mensaje'))
        <p class="uppercase border border-green-600 bg-green-100 text-green-600 font-bold p-2 my-5 text-sm rounded-lg">
            {{ session('mensaje') }}
        </p>
    @else
        @if($ItsTheFirstTimeYouApply)
            @if($isApproved)
                <x-button class="my-5" wire:click="postularme">
                    {{__('Postularme')}}
                </x-button>
            @else
                <p class="mx-auto">No cumples con el perfil para postularte</p>
            @endif
        @else
            <p>¡Ya te has postulado a esta vacante!</p>
        @endif
    @endif


</div>


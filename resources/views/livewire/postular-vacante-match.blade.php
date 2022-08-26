<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center">
    <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>

    @if($isApproved)
        <x-button class="my-5">
            {{__('Postularme')}}
        </x-button>
    @endif

</div>

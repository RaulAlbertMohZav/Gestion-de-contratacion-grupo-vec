<div>
    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-center my-10">Editar CV</h1>

                    <form wire:submit.prevent="saveDataUserCV">
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-label for="age" :value="__('Edad')" />
                                <x-input id="age" class="block mt-1 w-full" type="text" wire:model="user.edad" required autofocus />

                                @error('user.edad')
                                <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </section>
                        </section>
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-label for="phone-user" :value="__('Telefono')" />
                                <x-input id="phone-user" class="block mt-1 w-full" type="text" wire:model="user.telefono" required autofocus />

                                @error('user.telefono')
                                <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </section>
                        </section>
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-label for="country-user" :value="__('Nacionalidad')" />
                                <x-input id="country-user" class="block mt-1 w-full" type="text" wire:model="user.nacionalidad" required autofocus />

                                @error('user.nacionalidad')
                                <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </section>
                        </section>
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-label for="zona_de_residencia" :value="__('Zona de residencia')" />
                                <x-input id="zona_de_residencia" class="block mt-1 w-full" type="text" wire:model="user.zona_de_residencia" required autofocus />

                                @error('user.zona_de_residencia')
                                <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </section>
                        </section>
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-label :value="__('Tiene vehículo')" />
                                <div class="grid cols-span-2 gap-2">
                                    <div>
                                        <x-label for="vehiculo_si" :value="__('Si')" />
                                        {{--<x-input id="vehiculo_si" value="Si" class="block mt-1 w-full" type="radio"  required autofocus />--}}
                                        <input type="radio" wire:model="user.tiene_vehiculo" value="Si" id="vehiculo_si">
                                    </div>
                                    <div>
                                        <x-label for="vehiculo_no" :value="__('No')" />
                                        <input type="radio" wire:model="user.tiene_vehiculo" value="No" id="vehiculo_no">
                                    </div>
                                </div>

                                @error('user.tiene_vehiculo')
                                <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </section>
                        </section>
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-label :value="__('Tiene licencia')" />
                                <div class="grid cols-span-2 gap-2">
                                    <div>
                                        <x-label for="licencia_si" :value="__('Si')" />
                                        <input type="radio" wire:model="user.tiene_licencia_vehiculo" value="Si" id="licencia_si">
                                    </div>
                                    <div>
                                        <x-label for="licencia_no" :value="__('No')" />
                                        <input type="radio" wire:model="user.tiene_licencia_vehiculo" value="No" id="licencia_no">
                                    </div>
                                </div>

                                @error('user.tiene_licencia_vehiculo')
                                <livewire:mostrar-alerta :message="$message" />
                                @enderror
                            </section>
                        </section>
                        <section class="md:flex md:justify-center px-2 py-4">
                            <section class="w-full my-4">
                                <x-button type="submit">
                                    Guardar información
                                </x-button>
                            </section>
                        </section>
                    </form>
                    <hr>
                    <hr>
                    <section class="md:flex md:justify-center px-2 py-4">
                        @livewire('candidate-profile.expectativa-laboral-form')
                    </section>
                    <h1 class="text-2xl font-bold text-center my-10">Experiencia Laboral</h1>
                    <section class="md:flex md:justify-center px-2 py-4">
                        @livewire('candidate-profile.años-de-experiencia')
                    </section>
                    <hr>
                    <section class="md:flex md:justify-center px-2 py-4 w-full">
                        @livewire('candidate-profile.experiencias-laborales')
                    </section>
                    <hr>
                    <section class="md:flex md:justify-center px-2 py-4 w-full">
                        @livewire('candidate-profile.educations')
                    </section>
                    <hr>
                    <section class="md:flex md:justify-center px-2 py-4 w-full">
                        @livewire('candidate-profile.languajes')
                    </section>
                    @if(\App\Http\ClassServices\CandidateProfileProcess::hasCandidateProfileComplete())
                        <hr>
                        <section class="md:flex md:justify-center px-2 py-4 w-full">
                            <x-button wire:click="redirectToJobVacanciesPage">
                                ¡Ya puedes postular a vacantes!
                            </x-button>
                        </section>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        (function () {
            Livewire.on('ToJS-ExperienceWorkSaved', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Experiencia laboral guardada',
                    showConfirmButton: false,
                    timer: 3000
                })
            })

            Livewire.on('ToJS-UserDataCVSaved', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Informacion guardada',
                    showConfirmButton: false,
                    timer: 3000
                })
            })
        }) ()
    </script>
@endpush

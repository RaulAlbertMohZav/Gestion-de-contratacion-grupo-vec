<nav x-data="{ open: false }" class="border-b border-gray-100 bg-dark">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    {{--<a href="{{ route('vacantes.index') }}">
                        <x-application-logo class="block w-auto h-10 text-gray-600 fill-current" />
                    </a>--}}
                    <a href="{{ route('welcome') }}">
                        <x-application-logo class="block w-auto h-10 text-gray-600 fill-current" />
                    </a>
                </div>

                @auth
                    @can('create', App\Models\Vacante::class)
                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('vacantes.index')" :active="request()->routeIs('vacantes.index')">
                                {{ __('Mis Vacantes') }}
                            </x-nav-link>
                            <x-nav-link :href="route('vacantes.create')" :active="request()->routeIs('vacantes.create')">
                                {{ __('Crear Vacante') }}
                            </x-nav-link>
                        </div>
                    @endcan
{{--
                    @if(\Illuminate\Support\Facades\Auth::user()->rol === 1 && \App\Http\ClassServices\CandidateProfileProcess::hasCandidateProfileComplete())
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                                {{ __('Ver Vacantes') }}
                            </x-nav-link>
                        </div>
                    @endif --}}
                @endauth
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                @auth
                    @can('create', App\Models\Vacante::class)
                        <a class="flex flex-col items-center justify-center mr-2 text-sm font-extrabold text-white bg-indigo-600 rounded-full w-7 h-7 hover:bg-indigo-800" href="{{ route('notificaciones') }}">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </a>
                    @endcan

                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Authentication -->
                            @if(\Illuminate\Support\Facades\Auth::user()->rol === 1)
                                <x-dropdown-link :href="route('llenar-datos-candidato')">
                                    {{ __('Editar CV') }}
                                </x-dropdown-link>
                            @endif

                            @if(\App\Http\ClassServices\CandidateProfileProcess::hasCandidateProfileComplete())
                                <x-dropdown-link :href="route('ver-cv')">
                                    {{ __('Ver mi CV') }}
                                </x-dropdown-link>
                            @endif


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @auth
                        @if (!request()->routeIs('home') && auth()->user()->rol === 1)
                            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                                {{ __('Ver Vacantes') }}
                            </x-nav-link>
                        @endif
                    @endauth
                    @guest
                        <!-- Navigation Links -->

                        @if (!request()->routeIs('home'))
                            <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                                {{ __('Ver Vacantes') }}
                            </x-nav-link>
                        @endif
                        <x-nav-link :href="route('login')">
                            {{ __('Iniciar Sesión') }}
                        </x-nav-link>
                        <x-nav-link :href="route('register')">
                            {{ __('Crear Cuenta') }}
                        </x-nav-link>
                    @endguest
                </div>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        @auth
            <div class="pt-2 pb-3 space-y-1">
                @if(auth()->user()->rol === 2)
                    <x-responsive-nav-link :href="route('vacantes.index')" :active="request()->routeIs('vacantes.index')">
                        {{ __('Mis Vacantes') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('vacantes.create')" :active="request()->routeIs('vacantes.create')">
                        {{ __('Crear Vacante') }}
                    </x-responsive-nav-link>
                @endif

                    {{-- @if(\Illuminate\Support\Facades\Auth::user()->rol === 1 && \App\Http\ClassServices\CandidateProfileProcess::hasCandidateProfileComplete())
                        <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Ver Vacantes') }}
                        </x-responsive-nav-link>
                    @endif --}}

                @if(auth()->user()->rol === 2)
                    <div class="flex items-center gap-2 p-3">
                        <a class="flex flex-col items-center justify-center text-sm font-extrabold text-white bg-indigo-600 rounded-full w-7 h-7 hover:bg-indigo-800" href="{{ route('notificaciones') }}">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </a>
                        <p class="text-base font-medium text-gray-600">
                            @choice('Notificacion|Notificaciones', auth()->user()->unreadNotifications->count())
                        </p>
                    </div>
                @endif
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Cerrar Sesión') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Iniciar Sesión') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Crear Cuenta') }}
                </x-responsive-nav-link>
            </div>
        @endguest
    </div>
</nav>

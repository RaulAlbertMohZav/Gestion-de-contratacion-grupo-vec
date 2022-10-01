<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    {{--<link rel="shortcut icon" href="./assets/img/favicon.ico" />--}}
    <link rel="icon" type="image/ico" href="{{asset("icons/favicon.ico")}}">
    <link rel="icon" type="image/ico" sizes="128x128" href="{{asset("icons/favicon-128x128.ico")}}">
    <link rel="icon" type="image/ico" sizes="96x96" href="{{asset("icons/favicon-96x96.ico")}}">
    <link rel="icon" type="image/ico" sizes="32x32" href="{{asset("icons/favicon-32x32.ico")}}">
    <link rel="icon" type="image/ico" sizes="16x16" href="{{asset("icons/favicon-16x16.ico")}}">
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="./assets/img/apple-icon.png"
    />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <link
        rel="stylesheet"
        href="{{ asset('css/app.css') }}"
    />
    <title>Grupo Vec | Bienvenido</title>
</head>
<body class="antialiased text-gray-800">
@include('layouts.navigation')
<main>
    <div
        class="relative flex items-center content-center justify-center pt-16 pb-32"
        style="min-height: 75vh"
    >
        <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style="
            background-image: url('https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1267&amp;q=80');
          "
        >
          <span
              id="blackOverlay"
              class="absolute w-full h-full bg-black opacity-75"
          ></span>
        </div>
        <div class="container relative mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full px-4 ml-auto mr-auto text-center lg:w-6/12">
                    <div class="pr-12">
                        <h1 class="text-5xl font-semibold text-white">
                            Your story starts with us.
                        </h1>
                        <p class="mt-4 text-lg text-gray-300">
                            This is a simple example of a Landing Page you can build using
                            Tailwind Starter Kit. It features multiple CSS components
                            based on the Tailwindcss design system.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none"
            style="height: 70px"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-300 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
    </div>
    <section class="pb-20 -mt-24 bg-gray-300">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full px-4 pt-6 text-center lg:pt-12 md:w-4/12">
                    <div
                        class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg"
                    >
                        <div class="flex-auto px-4 py-5">
                            <div
                                class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-red-400 rounded-full shadow-lg"
                            >
                                <i class="fas fa-award"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Awarded Agency</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Divide details about your product or agency work into parts.
                                A paragraph describing a feature will be enough.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 text-center md:w-4/12">
                    <div
                        class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg"
                    >
                        <div class="flex-auto px-4 py-5">
                            <div
                                class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-blue-400 rounded-full shadow-lg"
                            >
                                <i class="fas fa-retweet"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Free Revisions</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Keep you user engaged by providing meaningful information.
                                Remember that by this time, the user is curious.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 pt-6 text-center md:w-4/12">
                    <div
                        class="relative flex flex-col w-full min-w-0 mb-8 break-words bg-white rounded-lg shadow-lg"
                    >
                        <div class="flex-auto px-4 py-5">
                            <div
                                class="inline-flex items-center justify-center w-12 h-12 p-3 mb-5 text-center text-white bg-green-400 rounded-full shadow-lg"
                            >
                                <i class="fas fa-fingerprint"></i>
                            </div>
                            <h6 class="text-xl font-semibold">Verified Company</h6>
                            <p class="mt-2 mb-4 text-gray-600">
                                Write a few lines about each one. A paragraph describing a
                                feature will be enough. Keep you user engaged!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center mt-32">
                <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-gray-600 bg-gray-100 rounded-full shadow-lg"
                    >
                        <i class="text-xl fas fa-user-friends"></i>
                    </div>
                    <h3 class="mb-2 text-3xl font-semibold leading-normal">
                        Working with us is a pleasure
                    </h3>
                    <p
                        class="mt-4 mb-4 text-lg font-light leading-relaxed text-gray-700"
                    >
                        Don't let your uses guess by attaching tooltips and popoves to
                        any element. Just make sure you enable them first via
                        JavaScript.
                    </p>
                    <p
                        class="mt-0 mb-4 text-lg font-light leading-relaxed text-gray-700"
                    >
                        The kit comes with three pre-built pages to help you get started
                        faster. You can change the text and images and you're good to
                        go. Just make sure you enable them first via JavaScript.
                    </p>
                    <a
                        href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/presentation"
                        class="mt-8 font-bold text-gray-800"
                    >Check Tailwind Starter Kit!</a
                    >
                </div>
                <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                    <div
                        class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-white bg-pink-600 rounded-lg shadow-lg"
                    >
                        <img
                            alt="..."
                            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1051&amp;q=80"
                            class="w-full align-middle rounded-t-lg"
                        />
                        <blockquote class="relative p-8 mb-4">
                            <svg
                                preserveAspectRatio="none"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 583 95"
                                class="absolute left-0 block w-full"
                                style="height: 95px; top: -94px"
                            >
                                <polygon
                                    points="-30,95 583,95 583,65"
                                    class="text-pink-600 fill-current"
                                ></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Top Notch Services
                            </h4>
                            <p class="mt-2 font-light text-white text-md">
                                The Arctic Ocean freezes every winter and much of the
                                sea-ice then thaws every summer, and that process will
                                continue whatever happens.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-20">
        <div
            class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
            style="height: 80px"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-white fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                    <img
                        alt="..."
                        class="max-w-full rounded-lg shadow-lg"
                        src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"
                    />
                </div>
                <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                    <div class="md:pr-12">
                        <div
                            class="inline-flex items-center justify-center w-16 h-16 p-3 mb-6 text-center text-pink-600 bg-pink-300 rounded-full shadow-lg"
                        >
                            <i class="text-xl fas fa-rocket"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">A growing company</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            The extension comes with three pre-built pages to help you get
                            started faster. You can change the text and images and you're
                            good to go.
                        </p>
                        <ul class="mt-6 list-none">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                        <span
                            class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                        ><i class="fas fa-fingerprint"></i
                            ></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Carefully crafted components
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                        <span
                            class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                        ><i class="fab fa-html5"></i
                            ></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Amazing page examples</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                        <span
                            class="inline-block px-2 py-1 mr-3 text-xs font-semibold text-pink-600 uppercase bg-pink-200 rounded-full"
                        ><i class="far fa-paper-plane"></i
                            ></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Dynamic components</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-20 pb-48">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap justify-center mb-24 text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold">Here are our heroes</h2>
                    <p class="m-4 text-lg leading-relaxed text-gray-600">
                        According to the National Oceanic and Atmospheric
                        Administration, Ted, Scambos, NSIDClead scentist, puts the
                        potentially record maximum.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-1-800x800.jpg"
                            class="max-w-full mx-auto rounded-full shadow-lg"
                            style="max-width: 120px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Ryan Tompson</h5>
                            <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                Web Developer
                            </p>
                            <div class="mt-6">
                                <button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-blue-400 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-twitter"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-blue-600 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-facebook-f"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-pink-500 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-dribbble"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-2-800x800.jpg"
                            class="max-w-full mx-auto rounded-full shadow-lg"
                            style="max-width: 120px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Romina Hadid</h5>
                            <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                Marketing Specialist
                            </p>
                            <div class="mt-6">
                                <button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-google"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-blue-600 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-facebook-f"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-3-800x800.jpg"
                            class="max-w-full mx-auto rounded-full shadow-lg"
                            style="max-width: 120px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Alexa Smith</h5>
                            <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                UI/UX Designer
                            </p>
                            <div class="mt-6">
                                <button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-google"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-blue-400 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-twitter"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-gray-800 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 mb-12 md:w-6/12 lg:w-3/12 lg:mb-0">
                    <div class="px-6">
                        <img
                            alt="..."
                            src="./assets/img/team-4-470x470.png"
                            class="max-w-full mx-auto rounded-full shadow-lg"
                            style="max-width: 120px"
                        />
                        <div class="pt-6 text-center">
                            <h5 class="text-xl font-bold">Jenna Kardi</h5>
                            <p class="mt-1 text-sm font-semibold text-gray-500 uppercase">
                                Founder and CEO
                            </p>
                            <div class="mt-6">
                                <button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-pink-500 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-dribbble"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-red-600 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-google"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-blue-400 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-twitter"></i></button
                                ><button
                                    class="w-8 h-8 mb-1 mr-1 text-white bg-gray-800 rounded-full outline-none focus:outline-none"
                                    type="button"
                                >
                                    <i class="fab fa-instagram"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="relative block pb-20 bg-gray-900">
        <div
            class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
            style="height: 80px"
        >
            <svg
                class="absolute bottom-0 overflow-hidden"
                xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none"
                version="1.1"
                viewBox="0 0 2560 100"
                x="0"
                y="0"
            >
                <polygon
                    class="text-gray-900 fill-current"
                    points="2560 0 2560 100 0 100"
                ></polygon>
            </svg>
        </div>
        <div class="container px-4 mx-auto lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap justify-center text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold text-white">Build something</h2>
                    <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-500">
                        Put the potentially record low maximum sea ice extent tihs year
                        down to low ice. According to the National Oceanic and
                        Atmospheric Administration, Ted, Scambos.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center mt-12">
                <div class="w-full px-4 text-center lg:w-3/12">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg"
                    >
                        <i class="text-xl fas fa-medal"></i>
                    </div>
                    <h6 class="mt-5 text-xl font-semibold text-white">
                        Excelent Services
                    </h6>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full px-4 text-center lg:w-3/12">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg"
                    >
                        <i class="text-xl fas fa-poll"></i>
                    </div>
                    <h5 class="mt-5 text-xl font-semibold text-white">
                        Grow your market
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full px-4 text-center lg:w-3/12">
                    <div
                        class="inline-flex items-center justify-center w-12 h-12 p-3 text-gray-900 bg-white rounded-full shadow-lg"
                    >
                        <i class="text-xl fas fa-lightbulb"></i>
                    </div>
                    <h5 class="mt-5 text-xl font-semibold text-white">Launch time</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="relative block py-24 bg-gray-900 lg:pt-0">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap justify-center -mt-48 lg:-mt-64">
                <div class="w-full px-4 lg:w-6/12">
                    <div
                        class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-300 rounded-lg shadow-lg"
                    >
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Cuentanos tus dudas</h4>
                            <p class="mt-1 mb-4 leading-relaxed text-gray-600">
                                Complete este formulario y nos pondremos en contacto con usted en 24 horas.
                            </p>
                            @if (\Session::has('success'))
                                <div class="flex items-center px-4 py-3 text-sm font-bold text-white bg-blue-500" role="alert">
                                    <svg class="w-4 h-4 mr-2 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                                    <p>{!! \Session::get('success') !!}</p>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('send-email-contact') }}">
                                <div class="relative w-full mt-8 mb-3">
                                    @csrf
                                    <label
                                        class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                        for="full-name"
                                    >Tu nombre</label
                                    ><input
                                        type="text"
                                        name="name"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded
                                        text-sm shadow focus:outline-none focus:ring w-full @error('name')
                                            border-red-500 @enderror"
                                        placeholder="Escribe tu nombre"
                                        style="transition: all 0.15s ease 0s"
                                    />
                                    @error('name')
                                        <div role="alert">
                                            <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                                                Error de validacion
                                            </div>
                                            <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                                                <p>{{ $message }}</p>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                        for="email"
                                    >Tu correo electronico</label
                                    ><input
                                        type="email"
                                        name="email"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded
                                        text-sm shadow focus:outline-none focus:ring w-full @error('email')
                                            border-red-500 @enderror"
                                        placeholder="Escribe tu correo electronico"
                                        style="transition: all 0.15s ease 0s"
                                    />
                                    @error('email')
                                        <div role="alert">
                                            <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                                                Error de validacion
                                            </div>
                                            <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                                                <p>{{ $message }}</p>
                                            </div>
                                        </div>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label
                                        class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                                        for="message"
                                    >Mensaje</label
                                    ><textarea
                                        rows="4"
                                        cols="80"
                                        name="message"
                                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded
                                        text-sm shadow focus:outline-none focus:ring w-full @error('message')
                                            border-red-500 @enderror"
                                        placeholder="Escribe tu mensaje"
                                    ></textarea>
                                    @error('message')
                                    <div role="alert">
                                        <div class="px-4 py-2 font-bold text-white bg-red-500 rounded-t">
                                            Error de validacion
                                        </div>
                                        <div class="px-4 py-3 text-red-700 bg-red-100 border border-t-0 border-red-400 rounded-b">
                                            <p>{{ $message }}</p>
                                        </div>
                                    </div>
                                    @enderror
                                </div>
                                <div class="mt-6 text-center">
                                    <button
                                        class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase bg-gray-900 rounded shadow outline-none active:bg-gray-700 hover:shadow-lg focus:outline-none"
                                        type="submit"
                                        style="transition: all 0.15s ease 0s"
                                    >
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="relative pt-8 pb-6 bg-gray-300">
    <div
        class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
        style="height: 80px"
    >
        <svg
            class="absolute bottom-0 overflow-hidden"
            xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none"
            version="1.1"
            viewBox="0 0 2560 100"
            x="0"
            y="0"
        >
            <polygon
                class="text-gray-300 fill-current"
                points="2560 0 2560 100 0 100"
            ></polygon>
        </svg>
    </div>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-6/12">
                <h4 class="text-3xl font-semibold">Let's keep in touch!</h4>
                <h5 class="mt-0 mb-2 text-lg text-gray-700">
                    Find us on any of these platforms, we respond 1-2 business days.
                </h5>
                <div class="mt-6">
                    <button
                        class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                        type="button"
                    >
                        <i class="flex fab fa-twitter"></i></button
                    ><button
                        class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-600 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                        type="button"
                    >
                        <i class="flex fab fa-facebook-square"></i></button
                    ><button
                        class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-pink-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                        type="button"
                    >
                        <i class="flex fab fa-dribbble"></i></button
                    ><button
                        class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-gray-900 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                        type="button"
                    >
                        <i class="flex fab fa-github"></i>
                    </button>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="flex flex-wrap mb-6 items-top">
                    <div class="w-full px-4 ml-auto lg:w-4/12">
                <span
                    class="block mb-2 text-sm font-semibold text-gray-600 uppercase"
                >Useful Links</span
                >
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://www.creative-tim.com/presentation"
                                >About Us</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://blog.creative-tim.com"
                                >Blog</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://www.github.com/creativetimofficial"
                                >Github</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://www.creative-tim.com/bootstrap-themes/free"
                                >Free Products</a
                                >
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 lg:w-4/12">
                <span
                    class="block mb-2 text-sm font-semibold text-gray-600 uppercase"
                >Other Resources</span
                >
                        <ul class="list-unstyled">
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md"
                                >MIT License</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://creative-tim.com/terms"
                                >Terms &amp; Conditions</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://creative-tim.com/privacy"
                                >Privacy Policy</a
                                >
                            </li>
                            <li>
                                <a
                                    class="block pb-2 text-sm font-semibold text-gray-700 hover:text-gray-900"
                                    href="https://creative-tim.com/contact-us"
                                >Contact Us</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400" />
        <div
            class="flex flex-wrap items-center justify-center md:justify-between"
        >
            <div class="w-full px-4 mx-auto text-center md:w-4/12">
                <div class="py-1 text-sm font-semibold text-gray-600">
                    Copyright © 2019 Tailwind Starter Kit by
                    <a
                        href="https://www.creative-tim.com"
                        class="text-gray-600 hover:text-gray-900"
                    >Creative Tim</a
                    >.
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    function toggleNavbar(collapseID) {
        document.getElementById(collapseID).classList.toggle("hidden");
        document.getElementById(collapseID).classList.toggle("block");
    }
</script>
</html>

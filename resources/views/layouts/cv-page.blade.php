<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi, initial-scale=1, maximum-scale=3, user-scalable=yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/preview-cv.css') }}">


    @livewireStyles
    <style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style>
    @stack('styles')
</head>
<body class="preview-cv" cz-shortcut-listen="true">
    <main>
        {{ $slot }}
    </main>
@livewireScripts
@stack('scripts')
</body>
</html>

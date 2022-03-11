<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <script src="https://use.fontawesome.com/0ab3484c04.js"></script>

        
        <!-- Styles -->
        <link rel="stylesheet" href="js/intl-tel-input/build/css/intlTelInput.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="js/intl-tel-input/build/js/intlTelInput.js"></script>

    </head>
    <body>
        <div class="mt-4">
            @include('includes.header')
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </body>
</html>

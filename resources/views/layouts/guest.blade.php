<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <script src="https://www.google.com/recaptcha/api.js?render=6LeVVqEdAAAAACw1satZStg2pNkfFZRjGtu_Q0qt"></script>
        <script>
            $(document).ready(function(){
                $('#registrar').click(function(){
                    grecaptcha.ready(function() {
                    grecaptcha.execute('6LeVVqEdAAAAACw1satZStg2pNkfFZRjGtu_Q0qt', {
                        action: 'registro'
                    }).then(function(token) {
                        // Add your logic to submit to your backend server here.
                    });
                });
                })

            })
        </script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>

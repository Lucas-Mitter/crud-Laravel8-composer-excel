<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marca Site</title>

        <link rel="stylesheet" href="/css/styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="teste">
            @if (Route::has('login'))
                    @auth
                        <a class="quadrado quadrado-dashboard" href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a class="quadrado quadrado-login" href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="quadrado quadrado-register" href="{{ route('register') }}" style="">Register</a>
                        @endif
                    @endauth
            @endif
        </div>
    </body>
</html>

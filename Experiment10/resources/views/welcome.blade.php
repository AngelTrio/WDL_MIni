<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Awareness And Readiness of Covid-19</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito';
            }
            a{
                margin-right: 40px;
                padding-right: 40px;
            }
        </style>
    </head>
    <body class="antialiased" style="background-image: url('assets/img/admin.jpg'); background-size: cover;">
        <nav class="navbar-dark bg-dark">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <ul class="nav nav-pills justify-content-end">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/home') }}" class="nav-link active text-sm text-gray-700">Home</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link active text-sm text-gray-700">Login</a>
                    </li>

                        @if (Route::has('register'))
                         <!--   <a href="{{ route('register') }}" style="margin-right: 5px;" class="ml-4 text-sm text-gray-700 underline">Register</a> -->
                        @endif
                    @endif
                </div>
            @endif
        </ul>
        </div>
    </nav>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','Jean LIONEL')</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

       
    </head>
    <body class="flex py-8 flex-col items-center justify-between min-h-screen">

        <main role="main" class="flex flex-col justify-center items-center">
             @yield('content')
            
        </main>

       
       

       <footer>
           <p class="text-grey-500">&copy;Copyright {{ date('Y')}} &middot;



    
            @if (!Route::is('about'))
                {{-- expr --}}
                    <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-500 underline">About as</a>
            @endif

              </p>
       </footer>
    </body>
</html>

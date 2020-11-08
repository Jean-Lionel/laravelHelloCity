<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ page_title($title ?? null) }}</title>

        <!-- Fonts -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

       
    </head>
    <body class="flex py-8 flex-col items-center justify-between min-h-screen">

        <main role="main" class="flex flex-col justify-center items-center">
             @yield('content')
            
        </main>

       
       @include('layouts.partials._footer')
    </body>
</html>

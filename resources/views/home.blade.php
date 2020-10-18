<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello City</title>

        <!-- Fonts -->
     
 

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body >

        <h1>Hello from BUJUMBURA</h1>
        <p>It is currentkly {{ date('h:i A')}}</p>
       

       <footer>
           <p>&copy;Copyright {{ date('Y')}} &middot; <a href="#">About as</a> </p>
       </footer>
    </body>
</html>

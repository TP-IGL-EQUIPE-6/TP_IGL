<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- nom de l'application -->
        <title>{{config('app.name', 'Scolarité')}}</title>
    </head>
    <body>
        <!-- include navbar -->
        @include ('inc.navbar') 
        @yield('content')
    </body>
</html>
 
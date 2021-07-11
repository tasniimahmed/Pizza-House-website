<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza House</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href= "/css/main.css" rel="stylesheet">
    </head>
    <body>
    <!--to write a specific section use yield-->
    @yield('content')
    <footer>
    Copyright 2020 pizza house
    </footer>
    </body>
    </html>
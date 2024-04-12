<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pizzeria da Gino</title>
    <!--Fonts awesome-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andada+Pro:ital,wght@0,500;1,400;1,500;1,600&family=Fira+Sans+Extra+Condensed:ital@1&display=swap" rel="stylesheet">

    
</head>

    <body class="antialiased">
        <x-navbar />
        {{$slot}}
        <x-footer />
    </body>
</html>
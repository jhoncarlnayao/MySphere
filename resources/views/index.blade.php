<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>MySpehere</title>
</head>
<body>
    @include('Header.header')
    @include('Boxes.center')
    @include('Boxes.side')
   

</body>
</html>
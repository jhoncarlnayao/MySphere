<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Ensures the body spans the full viewport height */
            background-color: #ffffff; /* Optional: set a background color */
        }

        img {
         width: 90pc;
         height: 50pc;
        }
    </style>
</head>
<body>
    <img src="{{ asset('mygf_img/Simple-Dot-[remix].gif') }}" alt="Centered GIF">
</body>
</html>

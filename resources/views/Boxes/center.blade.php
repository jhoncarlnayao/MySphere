<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/center.css') }}">
    <title>Document</title>
</head>
<body>
   <div class="center-boxes">
    <div class="container-center-boxes">
        <div class="box1 mb-4">
            <div class="box1-1 mr-5 ml-5"><img src="{{ asset('img/logo (2).png') }}" alt="" class="w-14 h-14"></div>
            <div class="box1-2 mr-5"><img src="{{ asset('img/chrome.png') }}" alt="" class="w-14 h-14"></div>
            <div class="box1-3 mr-10"><img src="{{ asset('img/spotify (2).png') }}" alt="" class="w-14 h-14"></div>
            <div id="button1">
                <button class="button">
                    Hover Me!
                </button>
            </div>
        </div>
        <div class="box2 mb-4">
            <div class="box2-1 mr-5 ml-5"><img src="{{ asset('img/logo (1).png') }}" alt="" class="w-14 h-14"></div>
            <div class="box2-2 mr-5"><img src="{{ asset('img/chrome.png') }}" alt="" class="w-14 h-14"></div>
            <div class="box2-3 mr-10"><img src="{{ asset('img/spotify (2).png') }}" alt="" class="w-14 h-14"></div>
            <div id="button2">
                <button class="button">
                    Hover Me!
                </button>
            </div>
        </div>
        <div class="box3"></div>
    </div>
   </div>
    
</body>
</html>
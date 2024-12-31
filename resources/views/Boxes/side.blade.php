<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
  <link rel="stylesheet" href="{{ asset('css/side.css') }}">
    <title>Document</title>
</head>
<body>
 <div class="side-boxes">
        <div class="sidebox1"></div>
        <div class="sidebox2">
            <div class="side-mini-box1">
                <img id="img1" class="active" src="{{ asset('mygf_img/1dce40f9-c5db-41a5-ba6f-dfb4f6a62634.jpg') }}" alt="Dynamic Image">
                <img id="img2" class="" src="" alt="Dynamic Image">
            </div>
            
            <div class="side-mini-box2"></div>
        </div>
 </div>
</body>

<script>
   const images = [
    "{{ asset('mygf_img/1dce40f9-c5db-41a5-ba6f-dfb4f6a62634.jpg') }}",
    "{{ asset('mygf_img/13e64154-8413-4495-93f2-1c03efd595f8.jpg') }}",
    "{{ asset('mygf_img/413001583_1029650834933852_7478375648264967163_n.jpg') }}",
    "{{ asset('mygf_img/462583350_568354539517757_9120969907205829853_n.jpg') }}",
];

let currentImageIndex = 0;
const img1 = document.getElementById('img1');
const img2 = document.getElementById('img2');

function changeImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;

    const newImage = images[currentImageIndex];
    const activeImg = img1.classList.contains('active') ? img1 : img2;
    const inactiveImg = img1.classList.contains('active') ? img2 : img1;

    inactiveImg.src = newImage;
    inactiveImg.classList.add('active');
    activeImg.classList.remove('active');
}

setInterval(changeImage, 2000);



</script>
</html>

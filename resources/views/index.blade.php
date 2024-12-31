<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>MySphere</title>
</head>
<body>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h7" />
              </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li><a id="homepage-link" href="#">Homepage</a></li>
              <li><a id="portfolio-link" href="#">Portfolio</a></li>
              <li><a id="about-link" href="#">About</a></li>
            </ul>
          </div>
        </div>
        <div class="navbar-center">
          <a class="btn btn-ghost text-xl">MySphere</a>
        </div>
        <div class="navbar-end">
          <label class="flex cursor-pointer gap-2 mr-5">
            <span class="label-text">Default</span>
            <input type="checkbox" value="synthwave" class="toggle theme-controller" />
            <span class="label-text">Valentine</span>
          </label>
        </div>
    </div>

  
    <div id="gif-container">
        <img src="{{ asset('mygf_img/Apple-Icon-[remix].gif') }}" alt="Apple Icon" />
    </div>

   
    <div id="content-wrapper">
        @include('Boxes.center')
        @include('Boxes.side')
    </div>

    <script>
       
        window.addEventListener('load', function() {
            const gifContainer = document.getElementById('gif-container');
            gifContainer.classList.add('show');

            setTimeout(function() {
                gifContainer.classList.remove('show');
            }, 3000); 
        });

        // Event listener for the "About" link
        document.getElementById('about-link').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior
            const contentWrapper = document.getElementById('content-wrapper');
            contentWrapper.classList.add('hidden'); // Hide current content

            // Simulate delay to transition (optional)
            setTimeout(function () {
                fetch('/about') // Fetch the about page content
                    .then(response => response.text())
                    .then(data => {
                        contentWrapper.innerHTML = data; // Replace with new content
                        contentWrapper.classList.remove('hidden'); // Show new content
                    })
                    .catch(error => console.error('Error loading about page:', error));
            }, 500); // Delay before fetching new content
        });
    </script>
</body>
</html>

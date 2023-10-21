<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Sushi</title>
    <style>
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #FF0000; 
            z-index: 1000; 
        }
        body {
            padding-top: 64px; 
        }
        .group {
            position: relative;
        }

        .image-description-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .group:hover .image-description-overlay {
            opacity: 1;
        }

        .image-description {
            font-size: 14px;
            padding: 5px;
        }
    </style>
</head>
<body>
<!-- Nav -->
<nav class="bg-red-500">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        </div>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
            <img class="h-8 w-auto" src="https://1000marcas.net/wp-content/uploads/2022/05/Akatsuki-Logo.png" alt="Your Company">
        </div>
        <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{ route('home') }}" class="text-white hover:bg-white hover:text-red-500 rounded-md px-3 py-2 text-sm font-medium">Dashboard</a>
            <a href="#" class="text-white hover:bg-white hover:text-red-500 rounded-md px-3 py-2 text-sm font-medium">About Us</a>
            <a href="#" class="text-white hover:bg-white hover:text-red-500 rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
            </div>
        </div>
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <a href="{{ route('login') }}" class="text-white hover:bg-white hover:text-red-500 rounded-md px-3 py-2 text-sm font-medium">Sign In</a>
            <button type="button" class="relative rounded-full bg-red-500 p-1 text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">View notifications</span>
                <div class="flex flex-shrink-0">
                    <img class="h-8 w-auto" src="https://th.bing.com/th/id/R.984e6c563e1b12f4849dbdd29af55429?rik=C%2faY251Os%2fhFlg&riu=http%3a%2f%2ffindicons.com%2ffiles%2ficons%2f1700%2f2d%2f512%2fcart.png&ehk=%2fd%2b3k%2fPNfjLeO50WugykB6pL47QGhiPC7t4K9IG2e4c%3d&risl=&pid=ImgRaw&r=0">
                </div>
            </button>
        </div>
    </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="#" class="bg-white text-red-500 block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
        <a href="#" class="text-white hover:bg-white hover:text-red-500 block rounded-md px-3 py-2 text-base font-medium">About Us</a>
        <a href="#" class="text-white hover:bg-white hover:text-red-500 block rounded-md px-3 py-2 text-base font-medium">Contact Us</a>
    </div>
    </div>
</nav>
<div class="bg-gray-100">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <h2 class="text-2xl font-bold text-gray-900">Sushi</h2>
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
            <div class="group relative">
    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://blog.sesa.id/wp-content/uploads/2022/02/SALMON-MENTAI.jpg" alt="Salmon Mentai Roll" class="h-full w-full object-cover object-center">
        <!-- Description displayed on hover inside the image -->
        <div class="image-description-overlay">
            <div class="image-description">Salmon Mentai Roll</div>
        </div>
    </div>
    <h3 class="mt-6 text-sm text-gray-500">
        <a href="#">
            <span class="absolute inset-0"></span>
            Salmon Mentai Roll
        </a>
    </h3>
    <p class="text-base font-semibold text-gray-900">IDR 40.000,00</p>
</div>

<!-- Eighth Dish (Salmon Unagi Roll) -->
<div class="group relative">
    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/14/8a/be/aa/salmon-unagi-cheese-roll.jpg" alt="Salmon Unagi Roll" class="h-full w-full object-cover object-center">
        <!-- Description displayed on hover inside the image -->
        <div class="image-description-overlay">
            <div class="image-description">Salmon Unagi Roll</div>
        </div>
    </div>
    <h3 class="mt-6 text-sm text-gray-500">
        <a href="#">
            <span class="absolute inset-0"></span>
            Salmon Unagi Roll
        </a>
    </h3>
    <p class="text-base font-semibold text-gray-900">IDR 47.000,00</p>
</div>

<!-- Ninth Dish (Salmon Maki) -->
<div class="group relative">
    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://secretsofsushi.com/wp-content/uploads/2014/07/Salmon_Roll_web.jpg" alt="Salmon Maki" class="h-full w-full object-cover object-center">
        <!-- Description displayed on hover inside the image -->
        <div class="image-description-overlay">
            <div class="image-description">Salmon Maki</div>
        </div>
    </div>
    <h3 class="mt-6 text-sm text-gray-500">
        <a href="#">
            <span class="absolute inset-0"></span>
            Salmon Maki
        </a>
    </h3>
    <p class="text-base font-semibold text-gray-900">IDR 36.000,00</p>
</div>
            </div>
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
            <div class="mt-1 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
            <div class="group relative">
    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/3c/42/92/salmon-aburi-roll.jpg" alt="Salmon Aburi Roll" class="h-full w-full object-cover object-center">
        <!-- Description displayed on hover inside the image -->
        <div class="image-description-overlay">
            <div class="image-description">Salmon Aburi Roll</div>
        </div>
    </div>
    <h3 class="mt-6 text-sm text-gray-500">
        <a href="#">
            <span class="absolute inset-0"></span>
            Salmon Aburi Roll
        </a>
    </h3>
    <p class="text-base font-semibold text-gray-900">IDR 43.000,00</p>
</div>

<!-- Eleventh Dish (Salmon Volcano Bomb) -->
<div class="group relative">
    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://www.blibli.com/friends-backend/wp-content/uploads/2023/07/B700033-4-scaled.jpg" alt="Salmon Volcano Bomb" class="h-full w-full object-cover object-center">
        <!-- Description displayed on hover inside the image -->
        <div class="image-description-overlay">
            <div class="image-description">Salmon Volcano Bomb</div>
        </div>
    </div>
    <h3 class="mt-6 text-sm text-gray-500">
        <a href="#">
            <span class="absolute inset-0"></span>
            Salmon Volcano Bomb
        </a>
    </h3>
    <p class="text-base font-semibold text-gray-900">IDR 40.000,00</p>
</div>

<!-- Twelfth Dish (Futomaki) -->
<div class="group relative">
    <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
        <img src="https://www.justonecookbook.com/wp-content/uploads/2020/01/Futomaki-1344-I.jpg" alt="Futomaki" class="h-full w-full object-cover object-center">
        <!-- Description displayed on hover inside the image -->
        <div class="image-description-overlay">
            <div class="image-description">Futomaki</div>
        </div>
    </div>
    <h3 class="mt-6 text-sm text-gray-500">
        <a href="#">
            <span class="absolute inset-0"></span>
            Futomaki
        </a>
    </h3>
    <p class="text-base font-semibold text-gray-900">IDR 33.000,00</p>
</div>
            </div>
        </div>
    </div>
</div>
<!-- Abotus -->
<div class="mb-20">
    <div class="container mx-auto flex flex-col items-center">
        <h2 class="text-3xl font-extrabold text-black mb-6">About Us</h2>
        <div class="md:flex md:space-x-6">
            <div class="md:text-center">
                <p class="text-black leading-relaxed mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique purus vel leo feugiat.
                    Vestibulum id nulla odio. Suspendisse potenti. Aenean bibendum dignissim metus, id mattis neque ultrices sed.
                </p>
                <p class="text-black leading-relaxed mb-4">
                    Curabitur sodales ante vitae quam bibendum, nec posuere metus feugiat. Maecenas a nunc nec libero
                    fermentum scelerisque at non ex. Sed vel ipsum velit.
                </p>
                <p class="text-black leading-relaxed mb-4">
                    Nunc consectetur eleifend lectus, nec accumsan tellus dignissim a. Sed euismod in urna a commodo.
                    Vivamus a neque et odio aliquam hendrerit.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<div class="bg-red-500 py-16">
    <div class="container mx-auto flex flex-col items-center">
        <h2 class="text-3xl font-extrabold text-white mb-6">Our Contacts</h2>
        <div class="md:flex md:space-x-6">
            <div class="md:text-center">
                <p class="text-white leading-relaxed mb-4">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique purus vel leo feugiat.
                    Vestibulum id nulla odio. Suspendisse potenti. Aenean bibendum dignissim metus, id mattis neque ultrices sed.
                </p>
                <p class="text-white leading-relaxed mb-4">
                    Curabitur sodales ante vitae quam bibendum, nec posuere metus feugiat. Maecenas a nunc nec libero
                    fermentum scelerisque at non ex. Sed vel ipsum velit.
                </p>
                <p class="text-white leading-relaxed mb-4">
                    Nunc consectetur eleifend lectus, nec accumsan tellus dignissim a. Sed euismod in urna a commodo.
                    Vivamus a neque et odio aliquam hendrerit.
                </p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
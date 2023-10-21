<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home</title>
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
<div class="container mx-auto">
    <div class="py-8">
        <h2 class="text-2xl font-semibold mb-4">Shopping Cart</h2>

        <!-- Cart Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Cart Item -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="product-image-1.jpg" alt="Product 1" class="w-full h-32 object-cover object-center">
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">Product 1</h3>
                    <p class="text-gray-600">Price: $19.99</p>
                    <p class="text-gray-600">Quantity: 1</p>
                </div>
                <button class="mt-4 block w-full bg-red-500 text-white text-center py-2 rounded-lg hover:bg-red-600">
                    Remove
                </button>
            </div>

            <!-- Cart Item -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="product-image-2.jpg" alt="Product 2" class="w-full h-32 object-cover object-center">
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">Product 2</h3>
                    <p class="text-gray-600">Price: $29.99</p>
                    <p class="text-gray-600">Quantity: 1</p>
                </div>
                <button class="mt-4 block w-full bg-red-500 text-white text-center py-2 rounded-lg hover:bg-red-600">
                    Remove
                </button>
            </div>

            <!-- Add more cart items here -->
            <div class="bg-white rounded-lg shadow-md p-4">
                <img src="product-image-2.jpg" alt="Product 2" class="w-full h-32 object-cover object-center">
                <div class="mt-4">
                    <h3 class="text-lg font-semibold">Product 3</h3>
                    <p class="text-gray-600">Price: $29.99</p>
                    <p class="text-gray-600">Quantity: 1</p>
                </div>
                <button class="mt-4 block w-full bg-red-500 text-white text-center py-2 rounded-lg hover:bg-red-600">
                    Remove
                </button>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="mt-8 bg-white rounded-lg shadow-md p-4">
            <h3 class="text-lg font-semibold">Cart Summary</h3>
            <div class="mt-4">
                <p class="text-gray-600">Subtotal: $49.98</p>
                <p class="text-gray-600">Shipping: $5.00</p>
                <p class="text-gray-600">Total: $54.98</p>
            </div>
            <button class="mt-4 block w-full bg-red-500 text-white text-center py-2 rounded-lg hover:bg-red-700">
                Checkout
            </button>
        </div>
    </div>
</div>

    
</body>
</html>
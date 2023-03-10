<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#f97316",
                        primaryhover: "#fb923c",
                        secondary: "#64748b",
                    },
                },
            },
        };
    </script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>@yield('title', config('app.name'))</title>
</head>

<body>
</body>

@include('components.navbar')
<div class="min-h-fit px-4 md:px-6 lg:px-0">
    @yield('content')
</div>

<footer class="mt-60 bg-white shadow md:px-6 dark:bg-gray-800">
    <div class="px-4 md:px-6 lg:px-0 py-8 max-w-screen-xl mx-auto ">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://flowbite.com" class="flex items-center mb-4 sm:mb-0">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CHASIERKU</span>
            </a>
            <ul
                class="flex flex-col lg:flex-row lg:items-center items-start mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400 space-y-2 lg:space-y-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Fitur</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Harga</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Hubungi Kami</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Laporkan Bug</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 text-center lg:text-left dark:text-gray-400">© 2022
            <a href="https://flowbite.com" class="hover:underline text-center">Chasierku</a>. All Rights Reserved.
        </span>
    </div>

</footer>

</html>

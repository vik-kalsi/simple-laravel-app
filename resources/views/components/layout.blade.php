<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title> {{ $title }} </title>
</head>

<body class="my-4 grid justify-center bg-zinc-700 text-white">
    
    <div class="mb-4">
        <ul class="border-2 flex py-2">
            <li class="px-2"><a class="hover:font-bold" href="/">Homepage</a></li>
            <li class="px-2"><a class="hover:font-bold" href="/about">About</a></li>
            <li class="px-2"><a class="hover:font-bold" href="/services">Services</a></li>
            <li class="px-2"><a class="hover:font-bold" href="/contact">Contact</a></li>
        </ul>
    </div>

    <div class="border-2 p-4">
        {{ $slot }}
    </div>
    
</body>
</html>
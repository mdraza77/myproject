<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Project</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-blue-600 p-4 shadow-md rounded-b-lg">
        <div class="container mx-auto flex items-center justify-between flex-wrap">
            <!-- Brand/Logo -->
            <div class="text-white text-2xl font-bold tracking-wide mr-6">
                Adventure
            </div>

            <!-- Navigation Links -->
            <div class="flex-grow flex items-center justify-end">
                {{-- <a href="/" class="text-white text-lg font-medium px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">Home</a>
                <a href="/about" class="text-white text-lg font-medium px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">About</a>
                <a href="/contact" class="text-white text-lg font-medium px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">Contact</a> --}}
                <!-- Assuming x-nav-link renders an <a> tag, you can apply classes directly -->
                <x-nav-link href="/" class="text-white text-lg font-medium px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">Home</x-nav-link>
                <x-nav-link href="/about" class="text-white text-lg font-medium px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">About</x-nav-link>
                <x-nav-link href="/contact" class="text-white text-lg font-medium px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out">Contact</x-nav-link>
            </div>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>
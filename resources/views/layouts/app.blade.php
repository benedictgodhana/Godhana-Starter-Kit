<!DOCTYPE html>
<html lang="en" x-data="{ menuOpen: false }">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Godhana' }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-semibold">Godhana Starter Kit</h1>
            <nav class="space-x-4">
                <a href="/" class="hover:underline">Home</a>
                <a href="/about" class="hover:underline">About</a>
                <a href="/contact" class="hover:underline">Contact</a>
            </nav>
        </div>
    </header>

    <!-- Content -->
    <main class="max-w-4xl mx-auto mt-10 p-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="mt-20 bg-white py-6 border-t">
        <div class="max-w-7xl mx-auto text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Godhana Starter Kit. All rights reserved.
        </div>
    </footer>

</body>
</html>

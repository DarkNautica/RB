<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayden Robbins Portfolio</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.24/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-gray-100 font-sans">

    <!-- Header -->
    <header class="bg-gradient-to-r from-green-600 via-blue-500 to-purple-500 p-6 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('images/JR.svg') }}" alt="Jayden Robbins Logo" class="h-16 w-auto">
            </a>
            <nav>
                <ul class="flex space-x-6">
                    <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="/projects" class="text-white hover:text-gray-300">Projects</a></li>
                    <li><a href="/about" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="/contact" class="text-white hover:text-gray-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto p-6">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-center text-gray-300 py-6 mt-8">
        <p>&copy; {{ date('Y') }} Jayden Robbins. All rights reserved.</p>
    </footer>
</body>
</html>

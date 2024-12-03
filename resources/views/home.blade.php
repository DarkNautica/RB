@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-green-400 to-blue-500 p-10 rounded-lg shadow-lg">
            @vite('resources/css/app.css')

            <h1 class="text-5xl font-extrabold text-center text-white mb-4">Welcome to My Portfolio</h1>
            <p class="text-lg text-center text-white">
                Hi, I'm Jayden Robbins! A passionate developer, pilot, and entrepreneur. Explore my projects and skills!
            </p>
        </section>

        <!-- Featured Projects Section -->
        <section class="mt-12">
            <h2 class="text-3xl font-semibold text-blue-400 mb-6">Featured Projects</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project: Aviation Website -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition duration-300 hover:scale-105">
                    <h3 class="text-2xl font-bold text-white mb-2">Aviation Website</h3>
                    <p class="text-gray-300 mb-4">
                        A Laravel-based platform showcasing airport data (runways, METAR, TAF) and APIs for integration with other websites.
                    </p>
                    <a href="http://localhost:8000" class="text-blue-400 hover:text-blue-500 font-semibold">View Project</a>
                </div>

                <!-- Project: Mini Might -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition duration-300 hover:scale-105">
                    <h3 class="text-2xl font-bold text-white mb-2">Mini Might</h3>
                    <p class="text-gray-300 mb-4">
                        A 2D roguelike Unity game where players battle enemies, collect scrolls and tomes, and upgrade their characters.
                    </p>
                    <a href="https://github.com/your-repo/minimight" class="text-blue-400 hover:text-blue-500 font-semibold">View Project</a>
                </div>

                <!-- Project: Shape Shift Shooter -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition duration-300 hover:scale-105">
                    <h3 class="text-2xl font-bold text-white mb-2">Shape Shift Shooter</h3>
                    <p class="text-gray-300 mb-4">
                        A 2D game created for a game jam, featuring innovative mechanics with shape-shifting enemies and intense battles.
                    </p>
                    <a href="https://github.com/your-repo/shapeshiftshooter" class="text-blue-400 hover:text-blue-500 font-semibold">View Project</a>
                </div>

                <!-- Project: AltitudeHub -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition duration-300 hover:scale-105">
                    <h3 class="text-2xl font-bold text-white mb-2">AltitudeHub</h3>
                    <p class="text-gray-300 mb-4">
                        An aviation-focused Laravel Forge site offering private pilot study materials, weather data, and airport info.
                    </p>
                    <a href="https://github.com/your-repo/altitudehub" class="text-blue-400 hover:text-blue-500 font-semibold">View Project</a>
                </div>

                <!-- Project: Portfolio Website -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition duration-300 hover:scale-105">
                    <h3 class="text-2xl font-bold text-white mb-2">Portfolio Website</h3>
                    <p class="text-gray-300 mb-4">
                        A personal portfolio site to showcase my projects, built with Laravel, Tailwind CSS, and deployed for global access.
                    </p>
                    <a href="https://your-portfolio-link.com" class="text-blue-400 hover:text-blue-500 font-semibold">View Project</a>
                </div>

                <!-- Project: Vital E-commerce Store -->
                <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transform transition duration-300 hover:scale-105">
                    <h3 class="text-2xl font-bold text-white mb-2">Vital E-commerce Store</h3>
                    <p class="text-gray-300 mb-4">
                        A Shopify store selling skincare, makeup, and supplements, with TikTok marketing strategies.
                    </p>
                    <a href="https://vital-store-link.com" class="text-blue-400 hover:text-blue-500 font-semibold">View Project</a>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="mt-16 bg-gradient-to-r from-purple-600 to-indigo-600 p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-3xl font-extrabold text-white mb-4">My Skills</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 text-white">
                <div>
                    <h3 class="text-xl font-bold">Web Development</h3>
                    <p>Laravel, HTML, Tailwind CSS, JavaScript, PHP</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Game Development</h3>
                    <p>Unity (C#), 2D Pixel Art</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Entrepreneurship</h3>
                    <p>E-commerce, Branding, Digital Marketing</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Programming</h3>
                    <p>C#, HTML, JavaScript, JS.Node, Python</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Aviation</h3>
                    <p>Private Pilot (PPL), Aviation Software</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold">Security</h3>
                    <p>AI Security Systems, Web3 Mechanics</p>
                </div>
            </div>
        </section>

        <!-- Contact Call-to-Action -->
        <section class="mt-16 bg-gradient-to-r from-green-600 to-blue-600 p-8 rounded-lg shadow-lg text-center">
            <h2 class="text-3xl font-extrabold text-white mb-4">Want to Collaborate?</h2>
            <p class="text-lg text-white mb-6">Let’s connect and discuss your next project.</p>
            <a href="/contact" class="bg-white text-green-600 font-bold py-3 px-6 rounded-lg shadow hover:bg-gray-100">
                Contact Me
            </a>
        </section>
    </div>
@endsection

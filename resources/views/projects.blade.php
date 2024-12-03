@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<div class="max-w-6xl mx-auto mt-10 bg-gray-800 p-6 rounded-lg shadow-md">
    <!-- Header Section -->
    <div class="text-center">
        <h1 class="text-4xl font-bold text-white">My Projects</h1>
        <p class="text-lg text-gray-400 mt-2">Here are some of the projects I've worked on, showcasing my skills in web development, programming, and design.</p>
    </div>

    <!-- Projects Section -->
    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <!-- Project Card 1: Laravel Blog -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-md flex flex-col">
            <img src="{{ asset('images/THENOW.svg') }}" alt="The Now Blog" class="rounded-md mb-4">
            <h3 class="text-xl font-bold text-white">Laravel Blog</h3>
            <p class="text-gray-300 mt-2 flex-grow">A full-featured blog application built with Laravel, featuring user authentication, CRUD functionality, and a responsive design.</p>
            <div class="mt-4 flex justify-between">
                <a href="https://github.com/yourusername/laravel-blog" target="_blank" class="flex items-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    <i class="fab fa-github mr-2"></i> GitHub
                </a>
                <a href="https://yourliveproject.com" target="_blank" class="flex items-center bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">
                    <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                </a>
            </div>
        </div>

        <!-- Project Card 2: E-commerce Platform -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-md flex flex-col">
            <img src="{{ asset('images/THESHOP.svg') }}" alt="The Shop" class="rounded-md mb-4">
            <h3 class="text-xl font-bold text-white">E-commerce Platform</h3>
            <p class="text-gray-300 mt-2 flex-grow">An online store built with Laravel and Tailwind CSS, featuring dynamic product filtering, payment integration, and an admin dashboard.</p>
            <div class="mt-4 flex justify-between">
                <a href="https://github.com/yourusername/ecommerce-platform" target="_blank" class="flex items-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    <i class="fab fa-github mr-2"></i> GitHub
                </a>
                <a href="https://yourliveproject.com" target="_blank" class="flex items-center bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">
                    <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                </a>
            </div>
        </div>

        <!-- Project Card 3: Mini Might Game -->
        <div class="bg-gray-700 p-4 rounded-lg shadow-md flex flex-col">
            <img src="{{ asset('images/project3.png') }}" alt="Project 3" class="rounded-md mb-4">
            <h3 class="text-xl font-bold text-white">Mini Might Game</h3>
            <p class="text-gray-300 mt-2 flex-grow">A 2D roguelite RPG developed in Unity, featuring procedurally generated levels, character upgrades, and engaging combat mechanics.</p>
            <div class="mt-4 flex justify-between">
                <a href="https://github.com/yourusername/mini-might-game" target="_blank" class="flex items-center bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    <i class="fab fa-github mr-2"></i> GitHub
                </a>
                <a href="https://yourliveproject.com" target="_blank" class="flex items-center bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 transition duration-300">
                    <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

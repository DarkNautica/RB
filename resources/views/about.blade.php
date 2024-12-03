@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-gray-800 p-6 rounded-lg shadow-md">
    <!-- Header Section -->
    <div class="text-center">
        <img src="{{ asset('images/profile.jpg') }}" alt="Profile Picture" class="w-32 h-32 mx-auto rounded-full mb-4">
        <h1 class="text-4xl font-bold text-white">Jayden Robbins</h1>
        <p class="text-lg text-gray-400 mt-2">Aspiring Pilot | Web Developer | Creator</p>
    </div>

    <!-- About Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold text-white">About Me</h2>
        <p class="mt-4 text-gray-300 leading-relaxed">
            I am Jayden Robbins, an aspiring pilot and a passionate web developer with a knack for creating elegant and functional web applications. Currently, I am pursuing an associate degree in Career Pilot Technologies and Aviation Management. My goal is to merge my love for technology and aviation into meaningful projects that make a difference.
        </p>
    </div>

    <!-- Skills Section -->
<div class="mt-8">
    <h2 class="text-2xl font-bold text-white">Skills</h2>
    <div class="mt-4 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
        <!-- Skill Cards -->
        <div class="bg-blue-600 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-code text-3xl mb-2"></i>
            <span class="text-lg font-bold">Laravel</span>
        </div>
        <div class="bg-green-500 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-paint-brush text-3xl mb-2"></i>
            <span class="text-lg font-bold">Tailwind CSS</span>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fab fa-js-square text-3xl mb-2"></i>
            <span class="text-lg font-bold">JavaScript</span>
        </div>
        <div class="bg-purple-600 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-server text-3xl mb-2"></i>
            <span class="text-lg font-bold">PHP</span>
        </div>
        <div class="bg-blue-800 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-terminal text-3xl mb-2"></i>
            <span class="text-lg font-bold">C#</span>
        </div>
        <div class="bg-indigo-500 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-database text-3xl mb-2"></i>
            <span class="text-lg font-bold">MySQL</span>
        </div>
        <div class="bg-pink-500 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fab fa-html5 text-3xl mb-2"></i>
            <span class="text-lg font-bold">HTML</span>
        </div>
        <div class="bg-orange-500 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fab fa-css3-alt text-3xl mb-2"></i>
            <span class="text-lg font-bold">CSS</span>
        </div>
        <div class="bg-teal-500 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fab fa-node-js text-3xl mb-2"></i>
            <span class="text-lg font-bold">Node.js</span>
        </div>
        <div class="bg-gray-700 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-cloud text-3xl mb-2"></i>
            <span class="text-lg font-bold">AWS</span>
        </div>
        <div class="bg-red-600 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fab fa-git text-3xl mb-2"></i>
            <span class="text-lg font-bold">Git</span>
        </div>
        <div class="bg-green-700 text-white p-4 rounded-lg shadow-md flex flex-col items-center transform hover:scale-105 hover:shadow-lg transition duration-300">
            <i class="fas fa-code-branch text-3xl mb-2"></i>
            <span class="text-lg font-bold">Version Control</span>
        </div>
    </div>
</div>


    <!-- Experience Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold text-white">Experience</h2>
        <ul class="mt-4 space-y-4">
            <li class="bg-gray-700 p-4 rounded-md">
                <h3 class="text-lg font-bold text-white">Web Design and Development</h3>
                <p class="text-gray-300 mt-2">
                    Over three years of experience designing and developing websites using modern frameworks like Laravel, Tailwind CSS, and Vue.js.
                </p>
            </li>
            <li class="bg-gray-700 p-4 rounded-md">
                <h3 class="text-lg font-bold text-white">Aviation Student</h3>
                <p class="text-gray-300 mt-2">
                    Pursuing an associate degree in Career Pilot Technologies and Aviation Management, with a strong focus on precision and teamwork.
                </p>
            </li>
        </ul>
    </div>

    <!-- Goals Section -->
    <div class="mt-8">
        <h2 class="text-2xl font-bold text-white">Goals</h2>
        <p class="mt-4 text-gray-300 leading-relaxed">
            My short-term goals include obtaining my private pilot license and growing my web design business. Long-term, I aspire to work in a role where I can integrate my passion for aviation with my skills in software development.
        </p>
    </div>
</div>
@endsection

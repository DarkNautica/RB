@extends('layouts.app')

@section('title', 'Contact Me')

@section('content')
<div class="max-w-4xl mx-auto mt-10 bg-gray-800 p-6 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-center text-white">Contact Me</h1>

    <!-- Flash Messages -->
    @if (session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mt-4">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Contact Form -->
    <form action="{{ route('contact.send') }}" method="POST" class="mt-6 space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-300">Name</label>
            <input type="text" id="name" name="name" required
                class="mt-1 block w-full rounded-md border-gray-700 bg-gray-900 text-white shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
            <input type="email" id="email" name="email" required
                class="mt-1 block w-full rounded-md border-gray-700 bg-gray-900 text-white shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>
        <div>
            <label for="message" class="block text-sm font-medium text-gray-300">Message</label>
            <textarea id="message" name="message" rows="5" required
                class="mt-1 block w-full rounded-md border-gray-700 bg-gray-900 text-white shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>
        <div>
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-300">
                Send
            </button>
        </div>
    </form>

    <!-- Links Section -->
    <div class="mt-8 text-center">
        <p class="text-lg text-white mb-4">You can also reach me here:</p>
        <div class="flex justify-center space-x-6">
            <!-- Gmail Icon -->
            <a href="mailto:your-email@gmail.com" target="_blank" class="hover:opacity-80">
                <img src="{{ asset('images/gmail.svg') }}" alt="Gmail Logo" class="h-10">
            </a>

            <!-- Indeed Logo -->
            <a href="https://www.indeed.com/profile-url" target="_blank" class="hover:opacity-80">
                <img src="{{ asset('images/Indeed_Logo_Blue.svg') }}" alt="Indeed Logo" class="h-10">
            </a>
        </div>
    </div>
</div>
@endsection

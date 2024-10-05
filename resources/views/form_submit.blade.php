<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-8 px-8 sm:px-12 lg:px-8">
                <h2 class="font-semibold text-4xl text-gray-800 leading-tight">
                    {{ __('Job Application Form') }}
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <div class="py-20">
            <div class="bg-white border-2 text-center text-4xl overflow-hidden shadow-sm sm:rounded-lg py-8 space-x-8">
                {{ __('Apply') }}
            </div>
        </div>

        <div
            class="max-w-3xl mx-auto border-8 text-center items-center justify-center bg-slate-600 border-gray-300 shadow-4xl rounded-md p-20">
            <form action="/submit-application" method="post">
                <!-- Form fields -->
                <label for="name">Grandfather Name:</label><br>
                <input type="text" placeholder="Type in here" id="name" name="name" required><br><br>

                <label for="name">Family Name:</label><br>
                <input type="text" placeholder=" Type in here" id="name" name="name" required><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>

                <label for="phone">Phone Number:</label><br>
                <input type="tel" placeholder="050**" id="phone" name="phone" required><br><br>

                <label for="position">Position Applied For:</label><br>
                <input type="text" id="position" name="position" required><br><br>

                <label for="resume">Upload Resume:</label><br>
                <input type="file" id="resume" name="resume" required><br><br>

                <button class="px-3" type="submit" value="Submit"> Submit </button>
            </form>
        </div>
    </div>
</body>
<footer>
    <p>Line 1 of the footer</p>
    <p>Line 2 of the footer</p>
    <p>Line 3 of the footer</p>
    <p>Line 4 of the footer</p>
    <p>Line 5 of the footer</p>
</footer>


</html>
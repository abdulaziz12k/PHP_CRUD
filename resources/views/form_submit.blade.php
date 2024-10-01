
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
        <main>
            <div class="py-20">
                <div class="bg-white border-2 text-center text-3xl  overflow-hidden shadow-sm sm:rounded-lg py-5">
                    {{ __("Apply") }}
                </div>
                <div class="bg-teal-800 border-4 text-center  border-gray-300 rounded-lg p-8 space-y-4">
                    <form action="/submit-application" method="post">
                                <!-- Form fields here -->
                                <label for="name" >Grandfather Name:</label><br>
                        <input type="text" placeholder="Type in here" id="name" name="name" required><br><br>

                        <label for="name" >Family Name:</label><br>
                            <input type="text" placeholder=" Type in here" id="name" name="name" required><br><br>

                        <label for="email">Email:</label><br>
                            <input type="email" id="email" name="email" required><br><br>

                        <label for="phone">Phone Number:</label><br>
                            <input type="tel" placeholder="050**" id="phone" name="phone" required><br><br>

                        <label for="position">Position Applied For:</label><br>
                            <input type="text" id="position" name="position" required><br><br>

                        <label for="resume">Upload Resume:</label><br>
                            <input type="file" id="resume" name="resume" required><br><br>

                        <button class="px-3"type="submit" value="Submit"> Submit </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

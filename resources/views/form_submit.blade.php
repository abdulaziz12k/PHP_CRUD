<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-4xl text-gray-800 leading-tight">
            {{ __('Job Application Form ') }}
        </h2>
    </x-slot>
    <div class="py-20">
            <div class="bg-white border-2  text-center overflow-hidden shadow-sm sm:rounded-lg py-5">
                
                {{ __("Apply") }}
            </div>
            <div class="bg-teal-800 border-4 border-gray-300 rounded-md px-8 py-2 space-y-2">
            <form  action="/submit-application" method="post">

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
</x-app-layout>

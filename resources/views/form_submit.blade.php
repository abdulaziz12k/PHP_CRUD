<x-app-layout>

<x-slot name="header">
        <h2 class="font-semibold font-size-30px text-gray-800 leading-tight">
            {{ __('Job Application') }}
        </h2>
    </x-slot>

    <div class="py-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Apply") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 md:flex">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-3 hidden md:block">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-32">
                <p class="text-2xl px-20">
                    Test
                </p>
            </div>
        </div>
        <div class="md:max-w-4xl mx-auto sm:px-6 lg:px-3">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome :artikels="$artikels" />
            </div>
        </div>
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-3 hidden md:block">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-32">
                <p class="text-2xl px-20">
                    Test
                </p>
            </div>
        </div>
    </div>
</x-app-layout>

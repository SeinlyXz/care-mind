<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 md:flex">
        <div class="md:max-w-7xl mx-auto sm:px-6 lg:px-3">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome :pengunjung="$pengunjung" />
            </div>
        </div>
    </div>
</x-app-layout>

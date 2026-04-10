<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome box -->
            <div class="bg-white p-6 shadow-sm sm:rounded-lg mb-6">
                Welcome to your dashboard.
            </div>

            <!-- Menu Admin Panel -->
            <div class="bg-white p-6 shadow-sm sm:rounded-lg">

                <!-- Header row with title + button -->
                <div class="flex justify-between items-center mb-4">

                    <h3 class="text-lg font-bold">
                        Menu Overview
                    </h3>

                    <a href="{{ route('menu.create') }}"
                       class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + Create Menu Item
                    </a>

                </div>

                @include('menu._table')

            </div>

        </div>
    </div>
</x-app-layout>
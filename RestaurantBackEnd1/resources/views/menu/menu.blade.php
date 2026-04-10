<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Menu Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <!-- Create Button -->
                <div class="mb-4">
                    <a href="{{ route('menu.create') }}"
                       class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        + Create Menu Item
                    </a>
                </div>

                <!-- Menu Table (INCLUDED FILE) -->
                @include('menu._table')

            </div>

        </div>
    </div>
</x-app-layout>
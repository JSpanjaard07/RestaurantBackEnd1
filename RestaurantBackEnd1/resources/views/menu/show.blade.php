<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Menu Item Details
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

            <h1 class="text-2xl font-bold mb-4">{{ $menu->name }}</h1>

            <p class="mb-2 text-gray-700">
                {{ $menu->description }}
            </p>

            <p class="font-semibold mb-4">
                €{{ number_format($menu->price, 2) }}
            </p>

            <a href="{{ route('menu.index') }}"
               class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">
                Back
            </a>

        </div>
    </div>
</x-app-layout>
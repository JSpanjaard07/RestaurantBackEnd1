<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Menu Item
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

            <form action="{{ route('menu.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name"
                           class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description"
                              class="w-full border rounded px-3 py-2" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Price (€)</label>
                    <input type="number" step="0.01" name="price"
                           class="w-full border rounded px-3 py-2" required>
                </div>

                <button type="submit">
                    Save
                </button>

            </form>

        </div>
    </div>
</x-app-layout>
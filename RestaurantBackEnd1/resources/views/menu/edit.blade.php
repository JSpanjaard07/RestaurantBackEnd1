<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Menu Item
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto bg-white p-6 rounded shadow">

            <form action="{{ route('menu.update', $menu->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text"
                           name="name"
                           value="{{ old('name', $menu->name) }}"
                           class="w-full border rounded px-3 py-2"
                           required>
                </div>

                <!-- Description -->
                <div class="mb-4">
                    <label class="block text-gray-700">Description</label>
                    <textarea name="description"
                              class="w-full border rounded px-3 py-2"
                              required>{{ old('description', $menu->description) }}</textarea>
                </div>

                <!-- Price -->
                <div class="mb-4">
                    <label class="block text-gray-700">Price (€)</label>
                    <input type="number"
                           step="0.01"
                           name="price"
                           value="{{ old('price', $menu->price) }}"
                           class="w-full border rounded px-3 py-2"
                           required>
                </div>

                <!-- Buttons -->
                <div class="flex justify-between">
                    <a href="{{ route('menu.index') }}"
                       class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                        Cancel
                    </a>

                    <button type="submit"
                            class="px-4 py-2 rounded bg-green-600 text-black font-semibold shadow">
                        Update
                    </button>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
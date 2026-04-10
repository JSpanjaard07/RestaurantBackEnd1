<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Menu
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Create Button -->
            <div class="mb-6">
                <a href="{{ route('menu.create') }}"
                   class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    + Create Menu Item
                </a>
            </div>

            @if($menuItems->count())
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach($menuItems as $item)
                        <div class="bg-white shadow rounded p-4 flex flex-col justify-between">
                            <div>
                                <h3 class="text-lg font-bold mb-2">{{ $item->name }}</h3>
                                <p class="text-gray-600 mb-2">{{ $item->description }}</p>
                                <p class="font-semibold">€{{ number_format($item->price, 2) }}</p>
                            </div>
                            <div class="mt-4 flex justify-between">
                                <a href="{{ route('menu.show', $item->id) }}"
                                   class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700 text-sm">
                                    View
                                </a>
                                <a href="{{ route('menu.edit', $item->id) }}"
                                   class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('menu.destroy', $item->id) }}" method="POST"
                                      onsubmit="return confirm('Delete this menu item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600">No menu items available.</p>
            @endif

        </div>
    </div>
</x-app-layout>
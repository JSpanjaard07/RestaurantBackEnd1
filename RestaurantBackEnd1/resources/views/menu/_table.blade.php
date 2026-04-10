<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-4 py-2 border">Name</th>
                <th class="px-4 py-2 border">Description</th>
                <th class="px-4 py-2 border">Price</th>
                <th class="px-4 py-2 border">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($menuItems ?? [] as $item)
                <tr class="text-center">
                    <td class="px-4 py-2 border">{{ $item->name }}</td>
                    <td class="px-4 py-2 border">{{ $item->description }}</td>
                    <td class="px-4 py-2 border">€{{ number_format($item->price, 2) }}</td>
                    <td class="px-4 py-2 border space-x-2">

                        <a href="{{ route('menu.show', $item->id) }}"
                           class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
                            View
                        </a>

                        <a href="{{ route('menu.edit', $item->id) }}"
                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                            Edit
                        </a>

                        <form action="{{ route('menu.destroy', $item->id) }}"
                              method="POST"
                              class="inline-block"
                              onsubmit="return confirm('Delete this menu item?');">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-4 py-2 text-gray-600">
                        No menu items available.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
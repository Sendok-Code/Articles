<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('List Tag') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('category.create') }}" class="inline-flex items-center px-4 py-2 mb-2 ml-3 text-xs font-semibold tracking-widest text-white uppercase bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">+ New</a>
                    <table class="w-full border border-gray-300 table-auto">
                        <thead>
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2 border">Id</th>
                                <th class="px-4 py-2 border">Name</th>
                                <th class="px-4 py-2 text-right border">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $category)
                                <tr>
                                    <td class="px-4 py-2 text-center border">{{ $category->id }}</td>
                                    <td class="px-4 py-2 border">{{ $category->name }}</td>
                                    <td class="px-4 py-2 text-right border">
                                        <a href="{{ route('category.edit', $category->id) }}" class="text-blue hover:text-blue-500">Edit</a>
                                            <form action="{{ route('category.destroy', $category->id) }}" method="POST"
                                                class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                            </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

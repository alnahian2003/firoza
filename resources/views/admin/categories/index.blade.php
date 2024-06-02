@section('title', 'Browse All Categories')

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Browse All Categories
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="mb-4 text-right">
                        <a href="{{ route('admin.categories.create') }}">
                            <x-primary-button class="bg-indigo-500 dark:bg-indigo-500">Add a Category</x-primary-button>
                        </a>
                    </div>

                    {{-- Success Message --}}
                    @if (session('success'))
                        <div class="mb-4 flex items-center rounded-lg border border-green-300 bg-green-50 p-4 text-sm text-green-800 dark:border-green-800 dark:bg-gray-800 dark:text-green-400"
                            role="alert">
                            <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Success</span>
                            <div>
                                <span class="font-medium">Success!</span> {{ session('success') }}
                            </div>
                        </div>
                    @endif


                    {{-- Categories Table --}}
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                            <thead
                                class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th class="px-6 py-3" scope="col">
                                        Name
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Slug
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Posts
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        Created
                                    </th>
                                    <th class="px-6 py-3" scope="col">
                                        <span class="sr-only">Edit</span>
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                            scope="row">
                                            {{ $category->name }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $category->slug }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ number_format($category->posts->count()) }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $category->created_at->diffForHumans() }}
                                        </td>
                                        <td class="space-x-4 px-6 py-4 text-right">
                                            <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                                href="{{ route('admin.categories.edit', $category) }}">Edit</a>

                                            <form class="inline-flex"
                                                action="{{ route('admin.categories.destroy', $category) }}"
                                                method="POST" onclick="return confirm('Are you sure, bro?')">
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    class="font-medium text-red-600 hover:underline dark:text-red-500"
                                                    type="submit">Delete</button>
                                            </form>

                                        </td>
                                    </tr>

                                @empty
                                    <tr
                                        class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                                        <th class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white"
                                            scope="row">
                                            No categories available yet.
                                        </th>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="px-6 py-4">
                                        </td>
                                        <td class="space-x-4 px-6 py-4 text-right">
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">{{ $categories->links() }}</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

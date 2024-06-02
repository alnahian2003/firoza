<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Create a New Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Create a New Category Form --}}
                    <form class="space-y-6" method="post" action="{{ route('admin.categories.store') }}">

                        <div>
                            <x-input-label for="name" value="Name" />
                            <x-text-input class="block w-full mt-1" id="name" name="name" type="text"
                                :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <x-primary-button>Create</x-primary-button>

                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

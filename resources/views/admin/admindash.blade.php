<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin dashboard
        </h2>
    </x-slot>


    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">
                <div class="flex items-center">
                    <i class="fa fa-burger"></i>
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="{{ route('admin.products.index') }}" class="underline text-gray-900 dark:text-white">Manage Products</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        Add/Edit/Remove Products here
                    </div>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <div class="ml-4 text-lg leading-7 font-semibold">
                        <a href="{{ route('admin.products.orders') }}" class="underline text-gray-900 dark:text-white">
                            View Orders</a>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                       View orders that have been placed
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-grow font-semibold text-xl text-gray-800 leading-tight">
                Cart
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($contents as $item)
                <div class="flex p-4 m-2 hover:bg-gray-200">
                    <h1 class="text-xl flex-auto"> {{$item->name}}</h1>
                    <div class="text-xl">£{{number_format($item->price,2)}}</div>
                </div>

                @endforeach

                    <div class="flex p-4 m-2 hover:bg-gray-200">
                        <h1 class="text-xl flex-auto">Total price:</h1>
                        <div class="text-xl">£{{ Cart::pricetotal(2)}}</div>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>

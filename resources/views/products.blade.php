<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @foreach($products as $product)
                   <div class="flex p-4 m-2 hover:bg-cool-gray-100">
                       <h1 class="text-xl flex-auto"> {{$product->name}}</h1>
                    <div class="text-xl">£{{number_format($product->price,2)}}</div>
                   </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
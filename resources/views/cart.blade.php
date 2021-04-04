<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <h2 class="flex-grow font-semibold text-xl text-gray-800 leading-tight">
                Cart
            </h2>
            @if (Route::has('login'))
            <div class="flex-grow font-semibold text-xl text-gray-800 leading-tight">
                @auth
                <a href="{{route('cart.checkout')}}">
                <x-jet-button>Check Out</x-jet-button>
                </a>
                @else
                    <a href="{{ route('login') }}">
                        <x-jet-button>Login to order</x-jet-button>
                    </a>
            </div>
            @endif
            @endauth
            <div class="flex-grow font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('cart.destroy') }}">
                <x-jet-danger-button>Clear Cart</x-jet-danger-button>
                </a>
            </div>

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

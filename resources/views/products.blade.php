<title>{{$title}}</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if(session()->has('success'))
                    {{ session()->get('success') }}
                @endif

                @foreach($products as $product)  <?php /*loop to display products from database, displaying the name of each product and its price to 2 decimal places */?>
                <div class="flex p-4 m-2 hover:bg-gray-200">
                    <h1 class="text-xl flex-auto"> {{$product->name}}</h1>
                    <div class="text-xl mr-8">£{{number_format($product->price,2)}}</div>

                    @if (Route::has('login'))
                        @auth
                            <x-jet-button onClick="event.preventDefault();
                                document.getElementById('add-tocart-form-{{$product->id}}').submit()">Add to Cart
                            </x-jet-button>
                        @else
                            <a href="{{ route('login') }}">
                                <x-jet-button>Login</x-jet-button>
                            </a>
                        @endauth
                    @endif
                </div>

                <form id="add-tocart-form-{{$product->id}}" action="{{route('cart.add', $product->id)}}" method="POST"
                      style="display: none">
                    @csrf
                    @method("POST")
                </form>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>

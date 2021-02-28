<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <form method="POST" action="{{ route('admin.products.update', $product) }}">
            @csrf
            @method('PATCH')

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$product->name}}"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('Type') }}" />
                <x-jet-input id="type" class="block mt-1 w-full" type="text" name="type" value="{{$product->type }}"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Price') }}" />
                <x-jet-input id="price" class="block mt-1 w-full" type="double" name="price" value="{{$product->price}}" />
            </div>
            <x-jet-button class="ml-4">
                {{ __('Submit') }}
            </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

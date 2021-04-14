<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo></x-jet-authentication-card-logo>
        </x-slot>

        <form method="POST" action="{{ route('admin.products.update', $product) }}">
            @csrf
            @method('PATCH')

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}"></x-jet-label>
                <span style="color: red">@error('name'){{$message}}@enderror</span>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{$product->name}}"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('Type') }}"></x-jet-label>
                <select id="type" class="block mt-1 w-full" name="type" value="{{$product->type }}">
                    <option value="main course">Main course</option>
                    <option value="house special">House special</option>
                    <option value="breakfast">Breakfast</option>
                    <option value="deserts">Deserts</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Price') }}" />
                <span style="color: red">@error('price'){{$message}}@enderror</span>
                <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{$product->price}}" />
            </div>
            <x-jet-button class="ml-4">
                {{ __('Submit') }}
            </x-jet-button>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

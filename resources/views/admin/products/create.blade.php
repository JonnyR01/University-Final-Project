<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo></x-jet-authentication-card-logo>
        </x-slot>

        <form method="POST" action="{{ route('admin.products.store') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}"></x-jet-label>
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"></x-jet-input>
            </div>

            <div class="mt-4">
                <x-jet-label for="type" value="{{ __('Type') }}"></x-jet-label>
                <select id="type" class="block mt-1 w-full" name="type">
                    <option value="main course">Main course</option>
                    <option value="house special">House special</option>
                    <option value="breakfast">Breakfast</option>
                    <option value="deserts">Deserts</option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label for="price" value="{{ __('Price') }}"></x-jet-label>
                <x-jet-input id="price" class="block mt-1 w-full" type="double" name="price" :value="old('price')"></x-jet-input>
            </div>

                <x-jet-button class="ml-4">
                    {{ __('Submit') }}
                </x-jet-button>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>

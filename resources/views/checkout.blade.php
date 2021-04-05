<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Checkout
        </h2>
    </x-slot>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <x-jet-validation-errors class="mb-4"/>

        <form method="POST" id="payment-form" action="{{ route('cart.stripe') }}">
            @csrf

            <div>
                <x-jet-label for="card-holder-name" value="{{ __('Card holder name') }}"></x-jet-label>
                <x-jet-input id="card-holder-name" class="block mt-1 w-full" type="text" name="card-holder-name"
                             required
                             autofocus autocomplete="name"></x-jet-input>
            </div>

            <div>
                <x-jet-label for="address" value="{{ __('Delivery address') }}"></x-jet-label>
                <x-jet-input id="address" class="block mt-1 w-full" type="text" name="address" required
                             autocomplete="address"></x-jet-input>
            </div>

            <div>
                <x-jet-label for="postcode" value="{{ __('Delivery postcode') }}"></x-jet-label>
                <x-jet-input id="postcode" class="block mt-1 w-full" type="text" name="postcode" required
                             autocomplete="postcode"></x-jet-input>
            </div>

            <div>
                <x-jet-label for="phone-number" value="{{ __('Phone number') }}"></x-jet-label>
                <x-jet-input id="phone-number" class="block mt-1 w-full" type="text" name="phone-number" required
                             autocomplete="phone-number"></x-jet-input>
            </div>

            <input id="card-id" name="card-id" type="hidden" value="">

            <!-- Stripe Elements Placeholder -->
            <div class="form-input rounded-md shadow-sm mt-4">
                <div id="card-element"></div>
            </div>
            <div class="flex items-center justify-end mt-4">
                <div>
                    <x-jet-button id="card-button" data-secret="{{ $intent->client_secret }}">Proceed to payment
                    </x-jet-button>
                </div>

            </div>
        </form>
    </x-jet-authentication-card>
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        const stripe = Stripe('{{env("STRIPE_KEY")}}');

        const elements = stripe.elements();
        const cardElement = elements.create('card');

        cardElement.mount('#card-element');

        const cardHolderName = document.getElementById('card-holder-name');
        const cardId = document.getElementById('card-id');
        const paymentForm = document.getElementById('payment-form');
        const cardButton = document.getElementById('card-button');

        cardButton.addEventListener('click', async (e) => {
            e.preventDefault();
            const {paymentMethod, error} = await stripe.createPaymentMethod(
                'card', cardElement, {
                    billing_details: {name: cardHolderName.value}
                }
            );

            if (error) {
                // Display "error.message" to the user...
            } else {
                cardId.value = paymentMethod.id;
                paymentForm.submit();
            }
        });
    </script>
</x-app-layout>

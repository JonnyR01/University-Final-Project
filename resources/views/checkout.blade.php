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

            <input id="card-holder-name" type="text">
            <input id="card-id" name="card-id" type="hidden" value="">

            <!-- Stripe Elements Placeholder -->
            <div id="card-element"></div>

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

<x-guest-layout>
    <h3 class="text-3xl text-gray-800 font-black my-10">Donate to us</h3>
    <form action="{{route('donations.stripe')}}">
        @csrf
        <div id="card-elements"></div>
    </form>

<div class="grid lg:grid-cols-2 gap-8 w-100 mx-8 lg:mx-16">
    <div>
        <a href="https://checkout.fapshi.com/donation/11116032"
        class="text-blue-800 transition-all duration-200 ease-in-out hover:text-blue-700 hover:underline">
        Or... Donate using this link</a>
        <img src="https://picsum.photos/400/500" class="rounded-lg" alt="">
    </div>
    <form action="{{route('donations.momo')}}" method="POST" class="mt-4 rounded-lg p-2 space-y-6">
        @csrf
        <p class="flex flex-col space-y-3">
            <label for="amount">Amount</label>
            <input class="rounded-lg border-gray-400" id="amount" type="number" name="amount" min=0 placeholder="10000">
        </p>

        <p class="flex flex-col space-y-3">
            <label for="phone">Your momo number (MTN or Orange)</label>
            <input id="phone" class="rounded-lg border-gray-400" type="tel" name="phone" placeholder="672903281">
        </p>

        <p class="flex flex-col space-y-3">
            <label for="email">email</label>
            <input id="email" class="rounded-lg border-gray-400" type="email" name="email" placeholder="example@gmail.com">
        </p>
        <p class="flex flex-col space-y-3">
            <label for="message">Message</label>
            <textarea id="message" class="rounded-lg border-gray-400" name="message" placeholder="Type a short message"></textarea>
        </p>
        <button type="submit" class="px-6 py-2 rounded-lg text-white bg-green-500">Save</button>
    </form>
</div>




<x-slot name="scripts">
    <script src="https://js.stripe.com/v3"></script>
    <script>
        const stripe = Stripe('{{config('services.stripe.publishable_key')}}');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-elements');
    </script>
</x-slot>
</x-guest-layout>

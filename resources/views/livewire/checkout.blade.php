<div>
    <div class="gap-x-8 mx-auto max-w-2xl px-4 py-5 sm:px-6 sm:py-5 lg:max-w-7xl lg:px-8">
        {{-- back button --}}
        <button class="border border-gray-300 rounded-lg p-2 hover:bg-gray-300">
            <div class="flex gap-x-3 font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
                <span>Continue Shopping</span>
            </div>
        </button>

        <div class="flex gap-x-5 mt-3">
            {{-- shopping cart items --}}
            <div class="flex-1">
                <div class="flex flex-col mb-4">
                    <span class="text-2xl font-bold">
                        Checkout
                    </span>
                    <span>You have 3 items in your cart</span>
                </div>
                <div class="w-full">
                    <div class="font-bold text-left flex justify-between border-b">
                        <div class="w-64">Product</div>
                        <div>Size</div>
                        <div>Quantity</div>
                        <div>Total Price</div>
                        <div></div>
                    </div>
                    <div class="space-y-4">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="flex items-center bg-white border rounded-lg p-4 shadow-sm hover:bg-gray-50">
                                <img src="https://tailwindui.com/plus/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                     alt="Henley T-shirt"
                                     class="w-24 h-24 object-cover mr-4 rounded">

                                <div class="flex-grow">
                                    <div class="text-lg font-semibold">Henley T-shirt</div>
                                    <div class="text-sm text-gray-500">Red</div>
                                </div>

                                <div class="flex items-center space-x-4">
                                    <x-ts-select.native :options="[1,2,3]" />

                                    <x-ts-number centralized />

                                    <div class="font-medium">RM20.00</div>

                                    <button class="text-red-500 hover:text-red-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                {{-- subtotal --}}
                <div class="flex flex-col place-items-end text-left gap-y-2 mt-3">
                    <div class="text-lg">
                        <span class="text-lg font-bold">Subtotal:</span>
                        <span>RM20.00</span>
                    </div>
                    <div class="text-lg">
                        <span class="text-lg font-bold">Shipping:</span>
                        <span>RM20.00</span>
                    </div>
                    <div class="text-lg border-t-4">
                        <span class="text-lg font-bold">Total:</span>
                        <span class="text-2xl font-bold">RM20.00</span>
                    </div>
                </div>
            </div>

            {{-- payment info --}}
            <div class="flex-none flex flex-col bg-gray-100 px-5 py-3 rounded-md gap-y-4">
                <span class="text-2xl font-bold">
                    Payment Information
                </span>

                <hr>

                {{-- payment method --}}
                <div class="flex flex-col">
                    <span class="text-sm/6 font-medium text-gray-900">Payment Method:</span>
                    <div class="flex gap-x-2">
                        <button class="p-2 border rounded-lg shadow hover:bg-gray-600 hover:text-white">Credit Card</button>
                        <button class="p-2 border rounded-lg shadow hover:bg-gray-600 hover:text-white">VISA</button>
                        <button class="p-2 border rounded-lg shadow hover:bg-gray-600 hover:text-white">Paypal</button>
                        <button class="p-2 border rounded-lg shadow hover:bg-gray-600 hover:text-white">FPX</button>
                    </div>
                </div>

                {{-- contact information --}}
                <form>
                    <div class="pb-12">
                        <div class="flex flex-col gap-x-6 gap-y-4">
                            {{-- Expiration Date --}}
                            <div>
                                <x-ts-input label="Name on Card" />
                            </div>

                            {{-- card number --}}
                            <div>
                                <x-ts-input label="Card Number" />
                            </div>

                            <div class="flex gap-x-4">
                                {{-- expiration date --}}
                                <x-ts-input label="Expiration Date" />

                                {{-- cvv --}}
                                <x-ts-input label="CVV" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Pay Now</button>
                </form>
            </div>
        </div>
    </div>
</div>

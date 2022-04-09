<div>

    <h1 class="uppercase text-3xl text-gray-700 font-bold text-center">Checkout</h1>

    <div class="flex space-x-14 mt-10">

        <div class="w-2/3 space-y-8">

            <x-card title="Contact" icon="user-circle">

                <x-jet-input type="text" class="w-full" placeholder="Name"/>

                <x-jet-input type="text" class="w-full" placeholder="Email"/>

                <div class="flex space-x-4">

                    <x-jet-input type="text" class="w-full" placeholder="Zip Code"/>

                    <x-jet-input type="text" class="w-full" placeholder="Address Line 1"/>

                    <x-jet-input type="text" class="w-full" placeholder="Address Line 2"/>
                </div>

                <div class="flex space-x-4">

                    <x-jet-input type="text" class="w-full" placeholder="City"/>

                    <x-jet-input type="text" class="w-full" placeholder="State"/>
                </div>

                <div class="flex items-center justify-between text-gray-400">


                    <x-input.switch>
                        Save this address as default?
                    </x-input.switch>
                </div>

                <div class="text-gray-400 text-center">

                    Clicking on the button bellow you with our

                    <a href="#" class="text-primary-500 hover:text-primary-600 hover:underline">

                        terms and services
                    </a>.
                </div>
            </x-card>

            <x-card title="Shipping" icon="truck">

                <x-jet-input type="text" class="w-full" placeholder="Name"/>

                <div class="flex space-x-4">

                    <x-jet-input type="text" class="w-full" placeholder="Zip Code"/>

                    <x-jet-input type="text" class="w-full" placeholder="Address Line 1"/>

                    <x-jet-input type="text" class="w-full" placeholder="Address Line 2"/>
                </div>

                <div class="flex space-x-4">

                    <x-jet-input type="text" class="w-full" placeholder="City"/>

                    <x-jet-input type="text" class="w-full" placeholder="State"/>
                </div>

                <div class="flex items-center justify-between text-gray-400">

                    <x-input.switch>
                        Use default address for delivery?
                    </x-input.switch>
                </div>
            </x-card>

            <x-card title="Payment" icon="currency-dollar">

                <x-jet-input type="text" class="w-full" placeholder="Cardholder Name"/>

                <div class="flex space-x-4">

                    <x-jet-input type="text" class="w-3/5" placeholder="Card Number"/>

                    <x-jet-input type="text" class="w-1/5" placeholder="MM/YY"/>

                    <x-jet-input type="text" class="w-1/5" placeholder="CVC"/>
                </div>

                <div class="flex items-center justify-between text-gray-400">

                    <x-input.switch>
                        Save this card for next purchases?
                    </x-input.switch>
                </div>
            </x-card>
        </div>

        <div class="w-1/3">

            <div class="sticky top-4 bg-white rounded-lg overflow-hidden">

                <div class="pt-8 px-8 pb-4">

                    <h3 class="text-gray-900 text-xl text-center">Checkout Summary</h3>

                    <div class="space-y-2">

                        <div class="flex items-center justify-between mt-4 text-gray-700">

                            <span>2 products</span>

                            <span>$ 1,280.00</span>
                        </div>

                        <div class="flex items-center justify-between text-gray-700">

                            <span>Shipping</span>

                            <span>$ 45.00</span>
                        </div>

                        <div class="flex items-center justify-between text-gray-400">

                            <span>Discount</span>

                            <span>$ 0.00</span>
                        </div>

                        <div class="flex items-center space-x-1 text-gray-400">

                            <x-jet-input type="text" placeholder="Coupon" class="h-8 w-5/12 rounded-lg"/>

                            <button class="bg-gray-900 rounded-lg h-8 w-8 flex justify-center items-center">
                                <x-icon.plus class="w-5 h-5 text-white"/>
                            </button>
                        </div>

                        <div class="flex items-center justify-between text-gray-900 font-bold text-xl">

                            <span>Total</span>

                            <span>$ 1,325.00</span>
                        </div>
                    </div>
                </div>

                <button class="flex py-4 w-full space-x-2.5 items-center justify-center bg-gray-200 text-gray-400">

                    <x-icon.lock-closed class="w-4 h-4 text-green-300"/>

                    <span>Confirm Payment</span>
                </button>
            </div>
        </div>
    </div>
</div>

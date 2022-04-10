<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CheckoutPage extends Component
{
    public function render()
    {
        return view('livewire.checkout-page');
    }

    public function confirmPayment()
    {
        $checkout = (new Customer())->checkoutCharge(
            amount: 10000,
            name: 'Air pod XPTO',
            sessionOptions: [
                'success_url' => 'http://localhost/checkout?checkout_id=xpto',
                'cancel_url' => 'http://localhost/checkout'
            ]
        );

        return [
            'id' => $checkout->asStripeCheckoutSession()->id
        ];
    }
}

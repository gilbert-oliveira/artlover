<?php

use App\Facades\Stripe;
use App\Http\Livewire\CheckoutPage;
use Laravel\Cashier\Checkout;

it('should create a cashier checkout', function () {

    $checkout = \Pest\Laravel\mock(Checkout::class)
        ->shouldReceive('asStripeCheckoutSession')
        ->andReturn((object)['id' => 'jetete'])
        ->once()
        ->getMock();

    Stripe::shouldReceive('createCheckoutSession')
        ->once()
        ->andReturn($checkout);

    $this->livewire(CheckoutPage::class)->call('confirmPayment');
});

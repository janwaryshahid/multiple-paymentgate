<?php

namespace App\Services;

use App\Contracts\PaymentGatewayInterface;
class StripePaymentService implements PaymentGatewayInterface
{
    protected $apiKey;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function charge(array $cart)
    {
        try {
            //code...
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $checkout = $stripe->checkout->sessions->create([
            'success_url' => route('success'),
            'cancel_url' => route('cencle'),
               'line_items' => [
                [

                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => session('cart')['product_name']
                        ],
                        'unit_amount' => 100 * 100
                    ],
                    'quantity' => session('cart')['product_qty']
                ],

            ],
            'mode' => 'payment',
        ]);
        return [
            'status'=>1,
            'data'=>$checkout
        ];
    } catch (\Exception $ex) {
        return [
            'status'=>0,
            'message'=>$ex->getMessage()
        ];
    }
    
    }
}

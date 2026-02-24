<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stripe\Checkout\Session;


class StripeController extends Controller
{       

    function session(Request $request){                             
    $user = auth()->user();                                        //check user is log in

        $productItems = [];                                                 

        \Stripe\Stripe::setApiKey(config('stripe.sk'));              //stripe Api key configration

        foreach(session('cart') as $id =>$details){                  // get product detail in session

            $name = $details['name'];
            $total = $details['price'];
            $quantity = $details['quantity'];

            $two0 = "00";                                               
            $unit_amount = "$total";

            $productItems[] =[
                'price_data' => [
                    'product_data' => [
                        'name' => $name,
                    ],

                    'currency' => 'INR',
                    'unit_amount' => $unit_amount*100,
                ],
                'quantity' => $quantity
            ];
        }
        // dd($productItems);

        

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'              => [$productItems],
            'mode'                    => 'payment',
            'allow_promotion_codes'   =>  true,
            'metadata'                =>[
                'user_id'             => "0001"
            ],
            'customer_email' => $user->email,
            'billing_address_collection' => 'required',
            'success_url' => route('success', [], true) . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url'  => route('cancel'),
        ]);

        // dd($checkoutSession);

        return redirect()->away($checkoutSession->url);

    }

    // function success(){
    //     return "Thanks for you  order, you hav just completed your payment. The product will reach out to you as soon as possible";
    // }

    function cancel(){
        return"cancel";
    }
    public function success(Request $request)
{
    \Stripe\Stripe::setApiKey(config('stripe.sk'));

    $session = \Stripe\Checkout\Session::retrieve($request->session_id);

    if ($session->payment_status === 'paid') {
        session()->forget('cart');   // 
        return  "Thanks for you  order, you hav just completed your payment. The product will reach out to you as soon as possible";
    }

    return "Payment not completed.";
}
}
